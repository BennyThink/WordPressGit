<?php get_header(); ?>
    <div class="content-wrap">
        <div class="content">
            <header class="archive-header">
                <?php if (tag_description()) {
                    ?>
                    <div class="archive-header-banner"><?php echo tag_description(); ?></div>
                <?php } else {
                    ?>
                    <h1>标签：<?php echo single_tag_title(); ?></h1>
                <?php } ?>
            </header>
            <?php if (git_get_option('git_card_b')) {
                include 'modules/card.php';
            } else {
                include 'modules/excerpt.php';
            } ?>
        </div>
    </div>
<?php get_sidebar();
get_footer(); ?>