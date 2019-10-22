<?php
$product = $item['produkty'];
?>
<div class="row justify-content-center py-5">
    <div class="col-11 col-md-10">
        <h1>Produkty</h1>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-11 col-md-10 py-5">
        <div class="row">
            <?php 
            foreach($product as $key=>$produkty) :
            $produkt = $produkty['produkt']['url'];
            $link = $produkty['link']['url'];
            ?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 py-4">
                <a href="<?php echo $link ?>">
                    <img src="<?php echo $produkt ?>" style="width: 100%;" alt="">
                </a>
            </div>

            <?php endforeach; ?>

        </div>
    </div>

</div>