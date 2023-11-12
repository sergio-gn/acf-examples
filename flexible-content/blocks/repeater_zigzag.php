<?php if( have_rows('repeater_zigzag') ): ?>
    <?php while( have_rows('repeater_zigzag') ): the_row(); 
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $link = get_sub_field('link');
        $order = get_sub_field('order');
    ?>
        <section class="front-zigzag d-flex_newcss justify-center_newcss">
            <div class="container_newcss">
                <div class="d-flex_newcss fd-column-r_mb vthz-center gap_3 <?php echo $order ?>">
                    <div class="flex-1">
                        <h2>
                            <?php echo $title ?>
                        </h2>
                        <p>
                            <?php echo $content ?>
                        </p>
                        <a href="<?php echo $link['url'] ?>" class="cta_button_newcss">
                            <?php echo $link['link_text'] ?>
                        </a>
                    </div>
                    <div class="flex-1">
                        <img loading="lazy" class="w-100_newcss" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>