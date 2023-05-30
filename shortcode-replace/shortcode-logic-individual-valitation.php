<?php
$example = get_field('example');
if (empty($example['uppertitle'])) {
    $example['uppertitle'] = get_field('example', 'option')['uppertitle'];
}

if (empty($example['title'])) {
    $example['title'] = get_field('example', 'option')['title'];
}

if (empty($example['content'])) {
    $example['content'] = get_field('example', 'option')['content'];
}

$example = replace_suburb_placeholder($example);

if (!empty($example)): ?>
    <div>
        <div>
            <div>
                <p>
                    <?php echo $example['uppertitle']; ?>
                </p>
                <h3>
                    <?php echo $example['title']; ?>
                </h3>
            </div>
            <div>
                <div>
                    <?php echo $example['content']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
