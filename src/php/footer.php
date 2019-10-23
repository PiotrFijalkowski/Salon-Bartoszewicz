<?php
$footer = get_field('footer', 'option');
$logo_desktop = $footer['logo']['url'];
$logo_mobile = $footer['logo_mobile']['url'];
$text = $footer['text'];
?>

<footer class="footer-container bg-brown">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="row col-11 col-md-10 pl-0 pr-0 justify-content-between footer-content--container">
               <img src="<?php echo IMG_DIR; ?>/logo_footer.png" class="logo" alt="">
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>