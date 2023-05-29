<?php
//*************************** FUNCTION  */
function replace_variable_placeholder($content) {
    $placeholders = array('[variable]', '[Variable]');
    $page_title = get_the_title();

    // Remove 'Removalist' from the page title
    $page_title = str_ireplace('Removalist', '', $page_title);

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
?>

<?php /****************************************   section 1    ******************************/

    $sectionOne = (!empty($sectionOne = get_field('section_4')) && array_filter($sectionOne, 'trim')) ? $sectionOne : get_field('section_4', 'option');
    $sectionOne = replace_variable_placeholder($sectionOne);
if($sectionOne):
?>
<h1>
    <?php echo $sectionOne['title'] ?>
</h1>

<?php endif ?>