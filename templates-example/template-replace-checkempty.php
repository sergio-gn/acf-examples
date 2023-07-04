<?php
/**
 * Template Name: New Pages SEO
 *
 */

//*************************** FUNCTION 1 - overwrite variable **********/
function replace_variable_placeholder($content) {
    $placeholders = array('[suburb]', '[Suburb]');
    $page_title = get_the_title();

    // Remove 'Removalist' from the page title
    $page_title = str_ireplace('Stripper Hire', '', $page_title);

    if (is_array($content)) {
        foreach ($content as &$item) {
            if (is_string($item)) {
                foreach ($placeholders as $placeholder) {
                    if (strpos($item, $placeholder) !== false) {
                        $item = str_ireplace($placeholder, $page_title, $item);
                    }
                }
            }
        }
    } else if (is_string($content)) {
        foreach ($placeholders as $placeholder) {
            if (strpos($content, $placeholder) !== false) {
                $content = str_ireplace($placeholder, $page_title, $content);
            }
        }
    }
    return $content;
}
//************************ FUNCTION 2 - check if the fields are empty ****************/
function has_non_empty_elements($array) {
    foreach ($array as $value) {
        if (!empty($value)) {
            return true;
        }
    }
    return false;
}
//********************* end **********************************************************/
get_header('seo');
get_template_part( 'template-parts/menu-seo' );
?>
<?php
/*********************************************************************** BANNER **************************************************/
$banner = get_field('banner');
if (empty($banner['banner_background'])) {
    $banner['banner_background'] = get_field('banner', 'option')['banner_background'];
}

if (empty($banner['banner_title'])) {
    $banner['banner_title'] = get_field('banner', 'option')['banner_title'];
}

if (empty($banner['banner_text'])) {
    $banner['banner_text'] = get_field('banner', 'option')['banner_text'];
}

if (empty($banner['banner_button_link'])) {
    $banner['banner_button_link'] = get_field('banner', 'option')['banner_button_link'];
}

if (empty($banner['banner_button_text'])) {
    $banner['banner_button_text'] = get_field('banner', 'option')['banner_button_text'];
}

$banner = replace_variable_placeholder($banner);

if($banner): ?>
    <section>
        <div class="banner-content d-flex" style="background-image:url('<?= $banner['banner_background']['url']?>');">
            <div class="container d-flex banner-container">
                <h1 class="banner-h1"><?= $banner['banner_title']?></h1>
                <p style="text-align:center; color:#fff"><?= $banner['banner_text']?></p>
                <a href="<?= $banner['banner_button_link']?>" class="banner_cta-button" style="background: #F4795F;color: #fff;padding: 1rem 2rem;border-radius: 0.7rem;font-family:'Chewy';font-weight: normal;" />
                   <?= $banner['banner_button_text']?>
                </a>
            </div>
        </div>
    </section>
<?php endif;?>

<?php /*********************************************************************** CONTENT **************************************************/

$content_repeater = get_field('content_repeater');

// Check if $content_repeater is not an array or does not have any non-empty elements
if (!is_array($content_repeater) || !has_non_empty_elements($content_repeater)) {
    $content_repeater = get_field('content_repeater', 'option');
}
?>
<?php if (!empty($content_repeater)): ?>

<section class="content-1 container">
    <?php $index = 0;
    foreach ($content_repeater as $content):
        $index++;
        $content = replace_variable_placeholder($content);
        ?>
        <div class="content_repeater d-flex d-column-mb <?php if ($index % 2 != 1) { echo ' reverse-flex'; } ?>">
            <div style="flex:1;font-size: 1rem;">
                <h2 class="content-title">
                    <?php echo $content['title']; ?>
                </h2>
                <p style="font-size: 1rem;">
                    <?php echo $content['text']; ?>
                </p>
            </div>
            <div style="flex:1">
                <div class="content_img-wrapper">
                    <?php $img = $content['img']; ?>
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>

<?php /************************************************************ ORANGE CARDS ********************************************************/
    $orange_card = get_field('orange_card');

    if (!is_array($orange_card) || !has_non_empty_elements($orange_card)) {
        $orange_card = get_field('orange_card', 'option');
    }
?>
<?php if (!empty($orange_card)): ?>
    <section style="background:#F4795F">
        <div class="d-flex all-cards">
        <?php foreach ($orange_card as $content):
            $content = replace_variable_placeholder($content);
        ?>
            <div class="orange-cards">
                <h2 class="content-card">
                    <?php echo $content['title'] ?>
                </h2>
                <div style="font-size: 1rem;color:#fff">
                    <?php echo $content['text'] ?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<?php /**************************************************************************   FOOTER BANNER ****************************************************/
$cta = get_field('cta');
if (empty($cta['title'])) {
    $cta['title'] = get_field('cta', 'option')['title'];
}

if (empty($cta['subtitle'])) {
    $cta['subtitle'] = get_field('cta', 'option')['subtitle'];
}

if (empty($cta['button_link'])) {
    $cta['button_link'] = get_field('cta', 'option')['button_link'];
}

if (empty($cta['button_text'])) {
    $cta['button_text'] = get_field('cta', 'option')['button_text'];
}

if (empty($cta['button_subtext'])) {
    $cta['button_subtext'] = get_field('cta', 'option')['button_subtext'];
}

$cta = replace_variable_placeholder($cta);

if ($cta): ?>
    <section style="background:#FC836A">
        <div class="footer-container container">
            <h2 class="chewy text-white" style="margin: 0;">
                <?php echo $cta['title']?>
            </h2>
            <p class="text-white">
                <?php echo $cta['subtitle']?>
            </p>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-suburb',
                'menu_class' => 'footer-grid chewy text-white',
            )); ?>
            <a class="chewy bottom-button" href="<?php echo $cta['button_link']?>"><?php echo $cta['button_text']?></a>
            <p class="chewy text-white" style="margin: 0;"><?php echo $cta['button_subtext']?></p>
        </div>
    </section>
<?php endif; ?>