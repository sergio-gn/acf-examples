<?php 
if (have_rows('two_cards')) :
    while (have_rows('two_cards')) : the_row();
        $image = get_sub_field('image');
        $titleCard1 = get_sub_field('title_card_1');
        $contentCard1 = get_sub_field('content_card_1');
        $button = get_sub_field('button');
        $titleCard2 = get_sub_field('title_card_2');
        $contentCard2 = get_sub_field('content_card_2');
        $button2 = get_sub_field('button_2');
    endwhile;
endif;
?>

<section class="d-flex_newcss justify-center_newcss">
    <div class="container_newcss">
        <div>
            <img loading="lazy" class="w-100_newcss b-radius-1" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>">
        </div>
        <div class="front-two_cards d-flex_newcss flex-d-column_mb justify-space-around gap_1">
            <div class="front-two_cards_card front-card b-radius-1">
                <h3 class="headings_newcss break-anywhere fs-4_3 fs-2_5_mb line-h-1 ff-1_extrabold fc-3 text-center text-left_mb">
                    <?php echo $titleCard1; ?>       
                </h3>
                <div class="text-left_mb fc-5 py-2">
                    <p>
                        <?php echo $contentCard1; ?>
                    </p>
                </div>
                <a class="cta_button_newcss" href="<?php echo $button['url']; ?>">
                    <?php echo $button['link_text']; ?>              
                </a>
            </div>
            <div class="front-two_cards_card front-card b-radius-1">
                <h3 class="headings_newcss break-anywhere fs-4_3 fs-2_5_mb line-h-1 ff-1_extrabold fc-3">
                    <?php echo $titleCard2; ?>               
                </h3>
                <div class="fc-5 py-2">
                    <p>
                        <?php echo $contentCard2; ?>
                    </p>
                </div>
                <a class="cta_button_newcss" href="<?php echo $button_2['url']; ?>">
                    <?php echo $button2['link_text']; ?>        
                </a>
            </div>
        </div>
    </div>
</section>