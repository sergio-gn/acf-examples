<?php if(get_field('banner_background')){
$image = get_field('banner_background');

}else{
	$url = get_template_directory_uri();
	$image['url'] = $url.'/images/ibanner.jpg';
}?>
<style>
    .banner{
        background-image: url(<?php echo $image ?>);
    }
    @media only screen and (max-width: 1042px){
        .banner{
        background-image: none;
        }
    }
</style>
<div class="banner">
	<section role="document">
		<div>
            <?php if(is_front_page()){ ?>
                <div>
                    <?php the_field('banner_content')?>
                </div>
            <?php } elseif(is_page_template("page-templates/contact-page.php")) { ?>
                <div>
                    <?php if(get_field('banner_content')) {
                        the_field('banner_content');
                    } else {
                        the_title('<h1 itemprop="headline">','</h1>');
                    } ?>
                </div>
            <?php } elseif(is_home()) { ?>
                <div>
                    <h1 class="entry-title" itemprop="headline"><?php echo get_the_title(get_option('page_for_posts')); ?></h1>
                </div>
            <?php } else { ?>
                <div>
                    <?php if(get_field('banner_content')) {
                        the_field('banner_content');
                    } else {
                        the_title('<h1 itemprop="headline">','</h1>');
                    } ?>
                </div>
            <?php } ?>
		</div>
	</section>
</div>
