$example = (empty(get_field('example_field')) ? get_field('example_field', 'option') : get_field('example_field'));

$content1 = (!empty($example_field = get_field('example_field')) && array_filter($example_field, 'trim')) ? $example_field : get_field('example_field', 'option');
