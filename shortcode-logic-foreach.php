<?php
//****************************************   Insert Function on Top    *****************//

function replace_variable_placeholder($content) {
    $placeholders = array('[variable]', '[Variable]');
    $page_title = get_the_title();

    foreach ($placeholders as $placeholder) {
        if (strpos($content, $placeholder) !== false) {
            $content = str_ireplace($placeholder, $page_title, $content);
        }
    }

    return $content;
}
?>
<?php
/****************************************** call the function using group and repeater inside with foreach  ***************************************/
$field = get_field('field');
$field = replace_variable_placeholder($field);

if (!empty($field)) {
    foreach ($field as $field_item) {
        $title_white = $field_item['title'];
        $images_repeater = $field_item['images_repeater'];
        ?>
        <section>
            <div class="container">
                <h2 class="heading">
                    <?php echo $title; ?>
                </h2>
                <?php if (!empty($images_repeater)) { ?>
                    <div>
                        <?php foreach ($images_repeater as $image_item) {
                            $img = $image_item['img'];
                            $img_alt = $img['alt'];
                            $img_url = $img['url'];
                            ?>
                            <div>
                                <img loading="lazy" alt="<?php echo $img_alt; ?>" src="<?php echo $img_url; ?>"/>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </section>
    <?php
    }
}
?>