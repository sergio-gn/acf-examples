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

$MainField = get_field('main_field', 'option');
$MainField = replace_variable_placeholder($MainField);

if (!empty($MainField)): ?>
    <section>
        <div>
            <h2><?php echo $MainField['grey_title'] ?></h2>
            <div class="row">
                <?php foreach ($MainField['images_repeater'] as $SubField): ?>
                        <div>
                            <div>
                                <img src="<?php echo $SubField['icon']['url'] ?>" alt="<?php echo $SubField['icon']['alt'] ?>">
                                <div><?php echo $SubField['text'] ?></div>
                            </div>
                        </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php
endif
/**********************************************************************  end Best Choice *****************************************************************/
?>