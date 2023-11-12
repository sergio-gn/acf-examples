<?php if( have_rows('grid_images') ): ?>
    <section class="front-grid d-flex_newcss justify-center_newcss">
        <div class="container_newcss">
            <div class="front-grid-3 d-grid_newcss gap_1">
                <?php while( have_rows('grid_images') ): the_row(); 
                    $link = get_sub_field('link');
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                ?>
                        <div class="grid-square">
                            <a href="<?php echo $link['url'] ?>"/>
                                <div class="front-grid-img-wrap">
                                    <img class="img__thumb" loading="lazy" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                </div>
                                <p class="text_grid text-center headings_small_newcss"><?php echo $title ?></p>
                            </a>
                        </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>