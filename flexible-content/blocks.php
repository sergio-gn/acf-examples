<?php

/**
 * Template Name: Blocks
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
get_header();
?>
<style>
    .site-main > * {
        margin-top: 0!important;
        margin-bottom: 0!important;
    }
    .front-hero{
        margin-bottom: 6rem!important;
        padding-top: 13rem!important;
    }
    .banner-text{
        position: absolute;
        width: 40rem;
        margin-left: -55rem;
    }
    .banner-img{
        position: absolute;
        margin-right: -60rem;
    }
    .text-white p, h1, h2, h3, h4, h5, h6{color: #fff;}
    .mainh1{
        font-size: 3rem;
        color: #ffffff!important;
        font-weight: bold;
        text-shadow: 0 0 5px #32327c, 0 0 5px #32327c, 0 0 5px #32327c, 0 0 5px #32327c, 0 0 5px #32327c;
    }
    .suburb-banner-section {
        justify-content: center;
    }
    body{
        background:#32327c0f!important;
    }
    /* new */
    .d-flex_newcss{
        display:flex;
    }
    .d-grid_newcss{
        display: grid;
    }
    .text_grid{
        max-width: 20rem;
    }
    .front-img {
        position: relative;
    }
    .img__thumb {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .front-grid-img-wrap{
        position: relative;
        overflow: hidden;
        width: 20rem;
        border-radius: 2rem;
        height: 20rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .fd-column{
        flex-direction:column;
    }
    .container_newcss{
        max-width: 1300px;
    }
    .banner-margin_newcss{
        margin: 18rem 0;
    }
    .justify-center_newcss{
        justify-content: center;
    }
    .align-center_newcss{
        align-items: center;
    }
    .vthz-center{
        justify-content: center;
        align-items: center;
    }
    .gap_1{
        gap: 1rem;
    }
    .gap_3{
        gap: 3rem;
    }
    .main-title_newcss, .headings_newcss, .headings_small_newcss{
        color: #32327c;
        font-weight: bold;
        font-family: 'Gotham';
    }
    .main-title_newcss{
        font-size: 4rem;
    }
    .headings_newcss{
        font-size: 3rem;
    }
    .headings_small_newcss{
        font-size: 2rem;
    }
    .cta_button_newcss{
        line-height: 44px;
        background: #fe9eb9 !important;
        border-radius: 4px;
        padding: 0 18px;
        min-width: 121px;
        color: #fff !important;
        font-size: 16px;
        text-align: center;
    }
    .w-100_newcss{
        width:100%;
    }
    .flex-1{
        flex: 1;
    }
    .front-grid-3{
        grid-template-columns: auto auto auto;
    }
    section, .section-gapping{
        padding-top: 3rem;
        padding-bottom: 3rem;
    }
    .front-two_cards{
        margin-top: -5rem;
    }
    .justify-space-around{
        justify-content: space-around;
    }
    .front-two_cards_card{
        width: 35rem;
        justify-content: space-between;
        display: flex;
        flex-direction: column;
        overflow-wrap: break-word;
    }
    .b-radius-1{
        border-radius:1rem;
    }
    .front-card{
        background: #fff;
        padding: 1rem;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.5);
    }
    .mb_3{
        margin-bottom: 3rem!important;
    }
    .text-center{
        text-align:center;
    }
    .order-left{
        flex-direction: row-reverse;
    }
    .order-right{
        flex-direction: row;
    }
    @media(max-width: 1600px){
        .banner-text{
            margin-left: -35rem;
            z-index: 1;
        }
        .banner-img{
            margin-right: -80rem;
        }
    }
    @media(max-width:1100px){
        .row_newcss{
            flex-direction: column;
        }
        .fd-column-r_mb{
            flex-direction:column-reverse;
        }
        .flex-d-column_mb{
            flex-direction: column;
        }
        .main-title_newcss{
            font-size:2.5rem;
        }
        .headings_newcss{
            font-size:2rem;
        }
        .container_newcss{
            margin: 0 1rem;
        }
        .banner-margin_newcss{
            margin: 5rem 0rem;
        }
        .banner-text{
            margin: 0 1rem;
        }
        .front-hero{
            margin-bottom: unset!important;
            padding-top: unset!important;
        }
        .banner-text{
            position: unset;
            width: unset;
            margin: 0 1rem!important;
        }
        .banner-img{
            position: unset;
            margin-right: unset;
        }
        section, .section-gapping{
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .front-grid-3{
            grid-template-columns: auto;
        }
        .front-two_cards_card{
            width: 100%;
        }
        .front-two_cards{
            margin-top: unset;
        }
        #colophon .footer-form-section-wrap{
            margin: -50px auto 0;
        }
        .order-left{
            flex-direction: column;
        }
        .order-right{
            flex-direction: column;
        }
        .break-anywhere{
            overflow-wrap: anywhere;
        }
    }
</style>
<article class="main-article mb_3">
    <?php 
        if( have_rows('blocks') ): 
            while( have_rows('blocks') ): the_row();
                if(get_row_layout() == 'homepage_banner'):
                    include 'blocks/' . get_row_layout() . '.php';
                elseif(get_row_layout() == 'two_cards'):
                    include 'blocks/' . get_row_layout() . '.php';
                elseif(get_row_layout() == 'grid_images'):
                    include 'blocks/' . get_row_layout() . '.php';
                elseif(get_row_layout() == 'separated_zigzag'):
                    include 'blocks/' . get_row_layout() . '.php';
                elseif(get_row_layout() == 'repeater_zigzag'):
                    include 'blocks/' . get_row_layout() . '.php';
                endif;
            endwhile;
        endif; 
    ?>
</article>

<?php get_footer(); ?>