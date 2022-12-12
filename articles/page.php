<?php get_header() ?>

<?php
$sidebarId = 'sidebar-post-single';
$isSidebar = is_active_sidebar($sidebarId);
$mainClasses = $isSidebar ? ' col-md-9' : '';


?>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <?php the_post(); ?>
                    <h1><?php the_title() ?></h1>
                    <div><?php the_content() ?></div>
                </div>
                <div class="col-3">
                    <?php if (is_active_sidebar('sidebar-post-single')): ?>
                        <div class="col col-12 col-md-3">
                            <?php dynamic_sidebar('sidebar-post-single') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
<?php get_footer() ?>