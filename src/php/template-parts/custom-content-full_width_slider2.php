<?php
$slides = $item['slides'];
$type = $item['slider_type'];
?>
<div class="row justify-content-center py-5">
    <div class="col-11 col-md-10 article-container">
        <h1>Produkty</h1>
    </div>
</div>
<div class="row justify-content-center">
    <div class="position-relative col-11 col-md-10 mb-5">
        <div class="swiper-container d-none d-lg-block swiper2">
            <div class="swiper-wrapper">
                <?php 
                foreach($slides as $key=>$image) :
                    $image_slide = $image['image_slider']['url'];
                    $image_link = $image['link']['url'];
                ?>
                <div class="swiper-slide">
                    <a href="<?php echo $image_link ?>" class="d-block position-relative w-100 h-100 overflow-hidden">
                        <img class="img-fluid d-none d-md-block w-100 w-100" src="<?php echo $image_slide; ?>" alt="">
                        <img class="img-fluid d-md-none w-100 w-100"
                            src="<?php echo (empty($image_slide_mobile)) ? $image_slide : $image_slide_mobile; ?>"
                            alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="swiper-container d-md-none swiper-mobile">
            <div class="swiper-wrapper">
                <?php 
                foreach($slides as $key=>$image) :
                    $image_slide = $image['image_slider']['url'];
                    $image_link = $image['link']['url'];
                ?>
                <div class="swiper-slide">
                    <a href="<?php echo $image_link ?>" class="d-block position-relative w-100 h-100 overflow-hidden">
                        <img class="img-fluid d-none d-md-block w-100 w-100" src="<?php echo $image_slide; ?>" alt="">
                        <img class="img-fluid d-md-none w-100 w-100"
                            src="<?php echo (empty($image_slide_mobile)) ? $image_slide : $image_slide_mobile; ?>"
                            alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="swiper-container d-none d-md-block d-lg-none swiper-mobile-lg">
            <div class="swiper-wrapper">
                <?php 
                foreach($slides as $key=>$image) :
                    $image_slide = $image['image_slider']['url'];
                    $image_link = $image['link']['url'];
                ?>
                <div class="swiper-slide">
                    <a href="<?php echo $image_link ?>" class="d-block position-relative w-100 h-100 overflow-hidden">
                        <img class="img-fluid d-none d-md-block w-100 w-100" src="<?php echo $image_slide; ?>" alt="">
                        <img class="img-fluid d-md-none w-100 w-100"
                            src="<?php echo (empty($image_slide_mobile)) ? $image_slide : $image_slide_mobile; ?>"
                            alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php if($type == 'type_2') : ?>
        <div class="swiper-nav">
            <div class="swiper-nav-button swiper-nav-button-prev swiper-button-white">
                <img src="<?php echo IMG_DIR; ?>/arrow.svg" alt="" class="img-fluid">
            </div>
            <div class="swiper-nav-button swiper-nav-button-next swiper-button-white">
                <img src="<?php echo IMG_DIR; ?>/arrow.svg" alt="" class="img-fluid">
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>