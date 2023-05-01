<?php if( have_rows('maintenance') ): ?>
    <?php while( have_rows('maintenance') ): the_row(); ?>
        <section class="bg-terciary">
            <div class="container p-2_mb py-4">
                <div class="pb-5">
                    <p class="ff-2 text-center text-white">
                        <?php the_sub_field('uppertitle'); ?>
                    </p>
                    <h2 class="text-white text-center fs-4_3 fs-2_5_mb line-h-1 ff-1_extrabold py-1">
                        <?php the_sub_field('title'); ?>
                    </h2>
                    <p class="ff-2 text-center fc-transparent">
                        <?php the_sub_field('subtitle'); ?>
                    </p>
                </div>
                    <?php if( have_rows('blocks') ): ?>
                        <div class="gap-2-1 d-flex justify-center flex-wrap p-1_mb">
                            <?php while( have_rows('blocks') ): the_row();
                                $uppertitle = get_sub_field('uppertitle');
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                            ?>

                            <div class="flex-card bg-eleven text-white p-3 border-r-1">
                                <div class="inner-steps bg-quaternary border-r-5 text-white fs-08">
                                    <?php echo $uppertitle ?>
                                </div>
                                <div class="p-1">
                                    <h5 class="fs-2 text-center ff-1_extrabold">
                                        <?php echo $title ?>
                                    </h5>
                                </div>
                                <p class="ff-2 text-center fc-transparent">
                                    <?php echo $content ?>
                                </p>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif ?>