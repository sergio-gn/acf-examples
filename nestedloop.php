<?php if( have_rows('maintenance') ): ?>
    <?php while( have_rows('maintenance') ): the_row(); ?>
        <section>
            <div>
                <div>
                    <p>
                        <?php the_sub_field('uppertitle'); ?>
                    </p>
                    <h2>
                        <?php the_sub_field('title'); ?>
                    </h2>
                    <p>
                        <?php the_sub_field('subtitle'); ?>
                    </p>
                </div>
                    <?php if( have_rows('blocks') ): ?>
                        <div>
                            <?php while( have_rows('blocks') ): the_row();
                                $uppertitle = get_sub_field('uppertitle');
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $img = get_sub_field('img');
                            ?>
                            <div>
                                <div>
                                    <?php echo $uppertitle ?>
                                </div>
                                <div>
                                    <h5>
                                        <?php echo $title ?>
                                    </h5>
                                </div>
                                <div>
                                    <p>
                                        <?php echo $content ?>
                                    </p>
                                    <img loading="lazy" alt="<?php echo $img['alt'] ?>" src="<?php echo $img['url'] ?>"/>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif ?>