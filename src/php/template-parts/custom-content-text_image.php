<div class="row justify-content-center">
    <div class="col-12">
    <div class="row justify-content-center text_image_container ">
        <div class="col-12 col-md-6 px-0 order-2">
            <div class="image_custom" style="background-image: url('<?php echo $item['image']['url']; ?>');"></div>
        </div>
        <div class="col-12 col-md-6 text-image <?php echo ($item['order'] == 'left') ? 'order-3' : 'order-1'; ?>">
                <?php echo $item['text']; ?>
            
        </div>
    </div>
    </div>
</div>
