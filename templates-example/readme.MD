## 1- ADVANCED CUSTOM FIELDS (ACF)
    -> Add New 
    -> Add Fields (title, subtitle, content, etc).

 
## 2- CREATE TEMPLATE FILE
    -> go to wp-content/themes/your-theme/templates
    -> create template-example.php
    -> inside the code:
        ->get data from custom fields
        ->output data on the html
        -> create conditions in the code each section, saying: if data from post page using template is empty, use the options field instead.

## 3- GO TO FUNCTIONS.php, AND CREATE OPTIONS PAGE, EXAMPLE:

> if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-options',
        'capability' => 'edit_posts',
        'position'   => 30,
        'icon_url'   => 'dashicons-admin-generic',
    ));
}
if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(array(
        'page_title'  => 'Example Options',
        'menu_title'  => 'Example',
        'parent_slug' => 'theme-options',
    ));
}

# 4- CONNECT YOUR ADVANCED CUSTOM FIELD (ACF) with the template file.
    -> "Shows this field group if: Page Template is equal to Suburb"
    -> "Shows this field group if: Options Page is equal to Suburb Options"

EXAMPLE:
> $cta = get_field('cta');
  if (empty($cta['title'])) {
      $cta['title'] = get_field('cta', 'option')['title'];
  }
<h1 style="margin: 0;"><?php echo $cta['button_subtext']?></h1>
</div>

<?php endif; ?>
