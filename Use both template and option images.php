<?php
    $TemplateImg = get_field('name');
    if (!empty($TemplateImg)):
?>
    <img src="<?php echo esc_url($TemplateImg['url']); ?>" alt="<?php echo esc_attr($TemplateImg['alt']); ?>">
<?php
    else:
    $OptionImg = get_field('name', 'option');
?>
    <img src="<?php echo esc_url($OptionImg['url']); ?>" alt="<?php echo esc_attr($OptionImg['alt']); ?>">
<?php
    endif;
?>