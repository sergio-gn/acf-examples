<?php
    get_header();
    $args = array(
        'post_type'         =>  'example',
        'posts_per_page'    =>  -1
    );
    $query = new WP_Query($args);
    if($query->have_posts()) {
        ?>
            <div class="grid-examples">
                <div class="container">
                    <div class="row">
                        <?php
                            while($query->have_posts()) {
                                $query->the_post();
                                $image = get_field('main_image');
                                $hover_content = get_field('description');
                        ?>
                                <div class="col-md-6 col-xl-3">
                                    <a href="<?= get_permalink(); ?>">
                                        <div class="grid-cell" style="background-image: url(<?= $image['url'] ?>);">
                                            <div class="caption"><?= the_title(); ?></div>
                                            <div class="hover_content">
                                                <?= $hover_content ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
    }
    wp_reset_postdata();
?>
<?php get_footer(); ?>