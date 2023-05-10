<?php
    $variable = (empty(get_field('variable')) ? get_field('variable', 'option') : get_field('variable'));
    if($variable):
?>
    <p>
        <?php echo $variable['uppertitle']; ?>
    </p>

    <?php if( isset($variable['blocks']) && is_array($variable['blocks']) ): ?>
        <div>
            <?php foreach( $variable['blocks'] as $block ): ?>
                <div>
                    <h5>
                        <?php echo $blocks['title'] ?>
                    </h5>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
<?php
    endif
?>