<?php get_header() ?>
<?php
$sidebarId = 'sidebar-post-single';
$isSidebar = is_active_sidebar($sidebarId);
$mainClasses = $isSidebar ? ' col-md-9' : '';
?>

    <div>
        <div class="container">
            <div class="row">
                <div class="row col-9">
                    <?php while (have_posts()) :
                        the_post();
                        ?>
                        <div class="col-3 mt-3 mb-3">
                            <h3><?php the_title() ?></h3>
                            <div><strong><?php the_time('j F Y') ?></strong></div>
                            <a href="<?php the_permalink() ?>">Далее</a>
                        </div>
                    <?php endwhile; ?>
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