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
$content_repeater = (!empty($content_repeater = get_field('content_repeater')) && array_filter($content_repeater, 'trim')) ? $content_repeater : get_field('content_repeater', 'option');
if (!empty($content_repeater)): ?>
    <section class="container">
        <?php $index = 0;
        foreach ($content_repeater as $content):
            $index++;
            $content = replace_variable_placeholder($content);
            ?>
            <div class="content_repeater <?php if ($index % 2 != 1) { echo ' reverse-flex'; } ?>">
                <div>
                    <h2>
                        <?php echo $content['title']; ?>
                    </h2>
                    <p>
                        <?php echo $content['text']; ?>
                    </p>
                </div>
                <div>
                    <div>
                        <?php $img = $content['img']; ?>
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
<?php endif;?>