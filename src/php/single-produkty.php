<?php

get_header(); the_post();

set_query_var('page', get_the_ID());
?>
<div class="body-wrapper-produkty">

<div class="custom-content-single_post">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-md-10">
                <h1 class="text-bold"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
            </div>
    <?php get_template_part('template-parts/custom-content');?>
    <!-- <div class="custom-content-single_post_footer">
                    <div class="custom-content-single_post_footer_image">
                        <img src="<?php echo IMG_DIR; ?>/newsend.svg" alt="">
                    </div>
                    <div class="custom-content-single_post_footer_share">
                        <div class="custom-content-single_post_footer_share_presskit">
                            <a href="#">
                                <img src="<?php echo IMG_DIR; ?>/icon-pdf.svg" alt="">
                                <span>pobierz komplet materiałów prasowych</span>
                            </a>
                        </div>
                        <div class="custom-content-single_post_footer_share_social">
                            <span>udostępnij</span>
                            <a href="#"><img src="<?php echo IMG_DIR;?>/icon-fb.svg" alt=""></a>
                            <a href="#"><img src="<?php echo IMG_DIR;?>/icon-tw.svg" alt=""></a>
                            <a href="#"><img src="<?php echo IMG_DIR;?>/icon-linkedin.svg" alt=""></a>
                            <a href="#"><img src="<?php echo IMG_DIR;?>/icon-email-post.svg" alt=""></a>
                            <a href="#"><img src="<?php echo IMG_DIR;?>/icon-link.svg" alt=""></a>
                        </div>
                    </div>

                    <a href="javascript:history.back()" class="btn btn-reverse">POWRÓT DO AKTUALNOŚCI</a>
                </div>
            </div> -->



    <?php 



get_footer();