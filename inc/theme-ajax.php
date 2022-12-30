<?php
if ('POST' != $_SERVER['REQUEST_METHOD']) {
    header('Allow: POST');
    header('HTTP/1.1 405 Method Not Allowed');
    header('Content-Type: text/plain');
    exit;
}

require(dirname(__FILE__) . '/../../../../wp-load.php'); // 此 comments-ajax.php 位於主題資料夾,所以位置已不同
nocache_headers();
$comment_post_ID = isset($_POST['comment_post_ID']) ? (int)$_POST['comment_post_ID'] : 0;
$post = get_post($comment_post_ID);
if (empty($post->comment_status)) {
    do_action('comment_id_not_found', $comment_post_ID);
    err(__('Invalid comment status.')); // 將 exit 改為錯誤提示
}

$status = get_post_status($post);
$status_obj = get_post_status_object($status);

do_action('pre_comment_on_post', $comment_post_ID);

$comment_author = (isset($_POST['author'])) ? trim(strip_tags($_POST['author'])) : null;
$comment_author_email = (isset($_POST['email'])) ? trim($_POST['email']) : null;
$comment_author_url = (isset($_POST['url'])) ? trim($_POST['url']) : null;
$comment_content = (isset($_POST['comment'])) ? trim($_POST['comment']) : null;
$edit_id = (isset($_POST['edit_id'])) ? $_POST['edit_id'] : null; // 提取 edit_id
//code injection fix

$comment_content = htmlspecialchars($comment_content);
// except for img
$turned = [
    '&lt;code&gt;',
    '&lt;/code&gt;',
    '&lt;strong&gt;',
    '&lt;/strong&gt;',
    '&lt;em&gt;',
    '&lt;/em&gt;',
    '&lt;del&gt;',
    '&lt;/del&gt;',
    '&lt;center&gt;',
    '&lt;/center&gt;',
    '&lt;br&gt;',
    '&lt;a href=\&quot;',
    '\&quot;&gt;',
    '&lt;/a&gt;'
];
$turn_back = [
    '<code>',
    '</code>',
    '<strong>',
    '</strong>',
    '<em>',
    '</em>',
    '<del>',
    '</del>',
    '<center>',
    '</center>',
    '<br>',
    '<a href="',
    '">',
    '</a>'
];


$comment_content = str_replace($turned, $turn_back, $comment_content);

$param = array(
    'html' => $comment_content, //必填
    'options' => array(),
    'tagArray' => array(),
    'type' => 'NEST',
    'length' => null,
    'lowerTag' => true,
    'XHtmlFix' => true,
);
$comment_content = fixHtmlTag($param);


/////////

// If the user is logged in
$user = wp_get_current_user();
if ($user->ID) {
    if (empty($user->display_name)) {
        $user->display_name = $user->user_login;
    }
    $comment_author = $wpdb->escape($user->display_name);
    $comment_author_email = $wpdb->escape($user->user_email);
    $comment_author_url = $wpdb->escape($user->user_url);
    if (current_user_can('unfiltered_html')) {
        if (wp_create_nonce('unfiltered-html-comment_' . $comment_post_ID) != $_POST['_wp_unfiltered_html_comment']) {
            kses_remove_filters(); // start with a clean slate
            kses_init_filters(); // set up the filters
        }
    }
} else {
    if (get_option('comment_registration') || 'private' == $status) {
        err('Hi，你必须登录才能发表评论！');
    } // 將 wp_die 改為錯誤提示
}
$comment_type = '';
if (get_option('require_name_email') && !$user->ID) {
    if (6 > strlen($comment_author_email) || '' == $comment_author) {
        err('请填写昵称和邮箱！');
    } // 將 wp_die 改為錯誤提示
    elseif (!is_email($comment_author_email)) {
        err('请填写有效的邮箱地址！');
    } // 將 wp_die 改為錯誤提示
}
if ('' == $comment_content) {
    err('请填写点评论！');
} // 將 wp_die 改為錯誤提示
// 增加: 錯誤提示功能
function err($ErrMsg)
{
    header('HTTP/1.1 405 Method Not Allowed');
    echo $ErrMsg;
    exit;
}

$comment_parent = isset($_POST['comment_parent']) ? absint($_POST['comment_parent']) : 0;
$commentdata = compact('comment_post_ID', 'comment_author', 'comment_author_email', 'comment_author_url', 'comment_content', 'comment_type', 'comment_parent', 'user_ID');
// 增加: 檢查評論是否正被編輯, 更新或新建評論
if ($edit_id) {
    $comment_id = $commentdata['comment_ID'] = $edit_id;
    wp_update_comment($commentdata);
} else {
    $comment_id = wp_new_comment($commentdata);
}
$comment = get_comment($comment_id);
if (!$user->ID) {
    $comment_cookie_lifetime = apply_filters('comment_cookie_lifetime', 30000000);
    setcookie('comment_author_' . COOKIEHASH, $comment->comment_author, time() + $comment_cookie_lifetime, COOKIEPATH, COOKIE_DOMAIN);
    setcookie('comment_author_email_' . COOKIEHASH, $comment->comment_author_email, time() + $comment_cookie_lifetime, COOKIEPATH, COOKIE_DOMAIN);
    setcookie('comment_author_url_' . COOKIEHASH, esc_url($comment->comment_author_url), time() + $comment_cookie_lifetime, COOKIEPATH, COOKIE_DOMAIN);
}

$comment_depth = 1;   //为评论的 class 属性准备的
$tmp_c = $comment;
while ($tmp_c->comment_parent != 0) {
    $comment_depth++;
    $tmp_c = get_comment($tmp_c->comment_parent);
}
//以下是評論式樣, 不含 "回覆". 要用你模板的式樣 copy 覆蓋.

echo '<li ';
comment_class();
echo ' id="comment-' . get_comment_ID() . '">';

//头像
echo '<div class="c-avatar">';
echo multiAvatar($comment->comment_author_email, $size = '54', deel_avatar_default());
//内容
echo '<div class="c-main" id="div-comment-' . get_comment_ID() . '">';
echo comment_text();
if ($comment->comment_approved == '0') {
    echo '<span class="c-approved">您的评论正在排队审核中，请稍候！</span><br />';
}
//信息
echo '<div class="c-meta">';
echo '<span class="c-author">' . get_comment_author_link() . '</span>';
echo get_comment_time('m-d H:i ');
echo time_ago();
echo '</div>';
echo '</div></div>';
?>