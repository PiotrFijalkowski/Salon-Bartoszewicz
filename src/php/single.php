<?php

get_header(); the_post();

set_query_var('page', get_the_ID());
?>


<div class="custom-content-single_post">
    <div class="d-none d-xl-block container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-md-10">
                <div class="image"><?php the_post_thumbnail( 'full' ); ?></div>
            </div>
        </div>
    </div>
    <div class="image d-block d-xl-none"><?php the_post_thumbnail( 'full' ); ?></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-md-10">
                <p class="date"><?php echo get_the_date(); ?></p>
                <h1 class="text-bold"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/custom-content');?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-md-10">
                <div class="custom-content-single_post_footer">
                    <div class="custom-content-single_post_footer_image">
                        <img src="<?php echo IMG_DIR; ?>/newsend.svg" alt="">
                    </div>
                    <div class="custom-content-single_post_footer_share">
                        <div class="custom-content-single_post_footer_share_social justify-content-end d-flex">
                            <span>udostępnij &nbsp;</span>
                            <a onClick="shareOnFB()"><img src="<?php echo IMG_DIR;?>/face.svg" alt=""></a>
                            <a onclick="CopyLink()"><img src="<?php echo IMG_DIR;?>/icon-link.svg" alt=""></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<?php 


get_footer();