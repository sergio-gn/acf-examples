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

<?php /****************************************   section 4    ******************************/

    $sectionFour = (!empty($sectionFour = get_field('section_4')) && array_filter($sectionFour, 'trim')) ? $sectionFour : get_field('section_4', 'option');
    $sectionFour = replace_variable_placeholder($sectionFour);
if($sectionFour):
?>
<h3>
    <?php echo $sectionFour['subtitle'] ?>
</h3>

<?php endif ?>