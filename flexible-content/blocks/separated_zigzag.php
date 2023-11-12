<?php if (have_rows('separated_zigzag')) :
    while (have_rows('separated_zigzag')) : the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $button = get_sub_field('link');
        $image= get_sub_field('image');
?>
        <section class="front-zigzag d-flex_newcss justify-center_newcss">
            <div class="container_newcss">
                <div class="d-flex_newcss justify-center_newcss fd-column-r_mb vthz-center gap_3">
                    <div class="flex-1">
                        <h2>
                            <?php echo $title;?>
                        </h2>
                        <p>
                            <?php echo $description; ?>
                        </p>
                        <a href="<?php echo $button['url'];?>" class="cta_button_newcss">
                            <?php echo $button['link_text'];?>
                        </a>
                    </div>
                    <div class="flex-1">
                        <img loading="lazy" class="w-100_newcss" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    </div>
                </div>
            </div>
        </section>
<?php
    endwhile;
endif;
?>