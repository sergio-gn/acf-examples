<?php if (have_rows('homepage_banner')) :
    while (have_rows('homepage_banner')) : the_row();
        $description = get_sub_field('description');
        $link = get_sub_field('link');
        $image = get_sub_field('image');
?>
        <div class="front-hero d-flex_newcss justify-center_newcss">
            <div class="container_newcss banner-margin_newcss">
                <div class="d-flex_newcss justify-center_newcss fd-column-r_mb vthz-center gap_3">
                    <div class="banner-text">
                        <h1 class="main-title_newcss">
                            <?php the_title(); ?>
                        </h1>
                        <p>
                            <?php echo $description; ?>
                        </p>
                        <a href="<?php echo $link['url']; ?>" class="cta_button_newcss">
                            <?php echo $link['link_text']; ?>
                        </a>
                    </div>
                    <div class="banner-img">
                        <img class="w-100_newcss" alt="<?php echo esc_attr($image['alt']); ?>" src="<?php echo $image['url']; ?>">
                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
?>
