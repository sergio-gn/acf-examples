<div class="row">
    <?php
    $ctas = get_field('ctas');

    if ($ctas) {
        $n = 0;
        foreach ($ctas as $cta) {
            $n++;
            $key = $cta['cta_title'];
            $value = $cta['cta_description'];
            switch ($n) {
                case 2:
                    $bg = 'bg-primary';
                    break;
                case 3:
                    $bg = 'bg-danger';
                    break;
                default:
                    $bg = 'bg-lightblue';
                    break;
            }
    ?>
        <div>
            <div class="<?= $bg ?>">
                <div>
                    <p>
                        <?= $key ?>
                    </p>
                    <p>
                        <?= $value ?>
                    </p>
                </div>
                <img loading="lazy" src="<?= $domain ?>/assets/images/home/c<?= $n ?>.jpg">
            </div>
        </div>
    <?php
        }
    }
    ?>
</div>
