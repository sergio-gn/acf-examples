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

/****************************************   call the function    *****************/

    $customSolutions = get_field('example_field');
    $customSolutions = replace_variable_placeholder($customSolutions);
    if($customSolutions):
        // HTML CODE
    endif;
?>