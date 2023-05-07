<?php
    $bannerImg = get_field('banner_img');

    if (!empty($bannerImg)):
?>

        <img src="<?php echo esc_url($bannerImg['url']); ?>" alt="<?php echo esc_attr($bannerImg['alt']); ?>">

<?php
    else:
        $bannerImgOption = get_field('banner_img', 'option');
?>
        <img src="<?php echo esc_url($bannerImgOption['url']); ?>" alt="<?php echo esc_attr($bannerImgOption['alt']); ?>">

<?php

    endif;

?>
