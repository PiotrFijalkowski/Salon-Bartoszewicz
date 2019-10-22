<?php
$slides = $item['slides'];
$type = $item['slider_type'];
?>

<div class="row <?php echo ($type != 'type_1') ? 'justify-content-end' : ''; ?>">
    <div class="position-relative col-12 px-0">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php 
                foreach($slides as $key=>$image) :
                    $image_slide = $image['image_slider']['url'];
                    $image_slide_mobile = $image['image_slider_mobile']['url'];
                ?>
                <div class="swiper-slide">
                <div class="slider-overlay"></div>
                    <a href="#" class="d-block position-relative w-100 h-100 overflow-hidden">
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
        <div class="swiper-nav ml-md-4">
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