</section>
<?php
if (git_get_option('git_superfoot_b') && !bt_is_mobile()) { ?>
<div id="footbar" style="border-top: 2px solid #8E44AD;"><ul>
<li><p class="first"><?php
    echo git_get_option('git_foottitle1'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent1'); ?></span></li>
<li><p class="second"><?php
    echo git_get_option('git_foottitle2'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent2'); ?></span></li>
<li><p class="third"><?php
    echo git_get_option('git_foottitle3'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent3'); ?></span></li>
<li><p class="fourth"><?php
    echo git_get_option('git_foottitle4'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent4'); ?></span></li>
</ul>
</div>
<?php
} ?>
<footer style="border-top: 1px solid ;background-image: url('<?php
echo esc_url( get_template_directory_uri() ); ?>/css/img/footbg.jpg'); background-repeat: repeat;" class="footer">
<div class="footer-inner"><div class="footer-copyright" align="center"><?php
if (git_get_option('git_footcode')) echo git_get_option('git_footcode'); ?> <span class="yunluocopyright"><?php if(function_exists('performance')) performance(true) ;?></span>
        <br>

        <?php if (git_get_option('git_weixin_qr')) : ?><span class="fa-stack fa-lg">
            <a class="fa fa-wechat fa-stack-1x" href="<?php echo git_get_option('git_weixin_qr') ?>" target="view_window"></a>
            </span><?php endif;?>
        <?php if (git_get_option('git_qqContact')) : ?><span class="fa-stack fa-lg">
            <a class="fa fa-qq fa-stack-1x" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo git_get_option('git_qqContact') ?>&site=qq&menu=yes" target="view_window"></a>
            </span><?php endif;?>
        <?php if (git_get_option('git_weibo') ): ?><span class="fa-stack fa-lg">
            <a class="fa fa-weibo fa-stack-1x" href="<?php echo git_get_option('git_weibo') ?>" target="view_window"></a>
            </span><?php endif;?>

        <?php if (git_get_option('git_emailContact')) : ?><span class="fa-stack fa-lg">
            <a class="fa fa-envelope-o fa-stack-1x" href="<?php echo 'mailto:'.git_get_option('git_emailContact') ?>" target="view_window"></a>
            </span><?php endif;?>

        <?php if (git_get_option('git_twitter')) : ?><span class="fa-stack fa-lg">
            <a class="fa fa-twitter fa-stack-1x" href="<?php echo git_get_option('git_twitter') ?>" target="view_window"></a>
            </span><?php endif;?>
        <?php if (git_get_option('git_facebook')) : ?><span class="fa-stack fa-lg">
            <a class="fa fa-facebook fa-stack-1x" href="<?php echo git_get_option('git_facebook') ?>" target="view_window"></a>
            </span><?php endif;?>
        <?php if (git_get_option('git_googleplus')) : ?><span class="fa-stack fa-lg">
            <a class="fa fa-google-plus fa-stack-1x" href="<?php echo git_get_option('git_googleplus') ?>" target="view_window"></a>
            </span><?php endif;?>

        <?php if (git_get_option('git_instagram') ): ?><span class="fa-stack fa-lg">
            <a class="fa fa-instagram fa-stack-1x" href="<?php echo git_get_option('git_instagram') ?>" target="view_window"></a>
            </span><?php endif;?>
        <?php if (git_get_option('git_git') ): ?><span class="fa-stack fa-lg">
            <a class="fa fa-github fa-stack-1x" href="<?php echo git_get_option('git_git') ?>" target="view_window"></a>
            </span><?php endif;?>
        <?php if (git_get_option('git_telegram') ): ?><span class="fa-stack fa-lg">
            <a class="fa fa-telegram fa-stack-1x" href="<?php echo 'https://t.me/'.git_get_option('git_telegram') ?>" target="view_window"></a>
            </span><?php endif;?>

        <span class="trackcode pull-right"><?php
if (git_get_option('git_track')) echo git_get_option('git_track'); ?></span></div></div></footer>
<?php
if (git_get_option('git_copydialog_b') && is_singular()) echo '<script type="text/javascript">document.body.oncopy=function(){alert("复制成功！若要转载请务必保留原文链接，申明来源，谢谢合作！");}</script>'; ?>
<?php
if (git_get_option('git_topnav_b') && !bt_is_mobile()) { ?>
<script type="text/Javascript">
$(function(){
	$('#nav-header').posfixed({
		distance : 0,
		pos : 'top',
		type : 'while',
		hide : false
	});
});
</script>
<?php
} ?>
<?php //下雪，页面有视频时自动关闭
if (git_get_option(git_snow_b) == 'git_all' && !strstr(get_the_content(),'[video]'))
    snow_display();
elseif (git_get_option(git_snow_b) == 'git_pc_only'&& !bt_is_mobile()&& !strstr(get_the_content(),'[video]'))
    snow_display();
?>
<?php
if (git_get_option('git_copy_b') && is_singular()) echo '<script type="text/Javascript">document.oncontextmenu=function(e){return false;};document.onselectstart=function(e){return false;};</script><style>body{ -moz-user-select:none;}</style><SCRIPT LANGUAGE=javascript>if (top.location != self.location)top.location=self.location;</SCRIPT><noscript><iframe src=*.html></iframe></noscript>'; ?>
<?php
if (git_get_option('git_footercode')) echo git_get_option('git_footercode'); ?>
<?php if(git_get_option('git_kiana') && !bt_is_mobile()):?>
<script src="<?php echo get_template_directory_uri().'/extra/kiana/bga.min.js';?>" async></script>
<?php endif;?>
<?php
wp_footer();welcome_hello();
global $dHasShare;
if ($dHasShare == true) {
    //echo '<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="' . get_template_directory_uri() . '/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
echo '';}
?>
<script>
	<?php
	if(git_get_option( 'git_notify_b' ) != ''):
	$jsString = '"' . str_replace( ' ', '","', git_get_option( 'git_notify_b' ) ) . '"';?>
    $("html,body").click(function (e) {
        if (e.target.nodeName == "BUTTON" || e.target.nodeName == "A" || e.target.nodeName == "DIV") {

        } else {

            var ily = new Array(<?=$jsString?>);
            var n = Math.floor(Math.random() * ily.length);
            var $i = $("<b/>").text(ily[n]);
            var x = e.pageX, y = e.pageY;
            $i.css({"z-index": 99999, "top": y - 20, "left": x, "position": "absolute", "color": "#40aa52"});
            $("body").append($i);
            $i.animate({"top": y - 180, "opacity": 0}, 1500, function () {
                $i.remove()
            });
            e.stopPropagation();

        }
    });
	<?php endif; ?>
    jQuery(window).ready(function () {
        jQuery("#loading").fadeOut(500);
        console.info('%c Will you recall me?', "background: white; color: #16a085; padding-left:10px;");
    });

    if (document.cookie.indexOf('snow') !== -1) {
        var child = document.getElementById('Snow');
        child.parentNode.removeChild(child);
    }
	<?php if(git_get_option( 'git_pic_a' )):?>
    $('img').wrap(function () {
        return '<a href="' + this.src + '" rel="box" class="fancybox"></a>';
    });

    <?php endif;?>
<?php if ( git_get_option( 'git_article_list' ) ):?>
    window.content_index_showTocToggle = false;
    document.getElementById("index-ul").style.display = "none";
    function toggleToc() {
        var tts = "[显示]";
        var tth = "[隐藏]";
        if (window.content_index_showTocToggle) {
            window.content_index_showTocToggle = false;

            document.getElementById("index-ul").style.display = "none";
            document.getElementById("content-index-togglelink").innerHTML = tts
        } else {
            window.content_index_showTocToggle = true;
            document.getElementById("index-ul").style.display = "block";
            document.getElementById("content-index-togglelink").innerHTML = tth
        }
    }
<?php endif;?>
</script>
<?php if(git_get_option(git_pangu)):?>
<script src="<?= get_template_directory_uri()?>/js/pangu.min.js"></script>
<script> pangu.spacingPage(); </script>
<?php endif;?>
<?php if(git_get_option(git_scroll)):?>
<script src="<?= get_template_directory_uri()?>/js/smoothscroll.js" async></script>
<?php endif;?>





</body></html>
<!--By Benny 2017🌙-->