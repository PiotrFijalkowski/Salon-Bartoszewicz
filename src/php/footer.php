<?php
$footer = get_field('footer', 'option');
$logo_desktop = $footer['logo']['url'];
$logo_mobile = $footer['logo_mobile']['url'];
$text = $footer['text'];
?>

<footer class="footer-container">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="row col-11 col-md-10 pl-0 pr-0 justify-content-between footer-content--container">
                <div class="col-12 col-md-7 col-lg-8 pl-0 pr-0 footer-rules--container">
                    <div class="col-12 p-xs-0">
                        <h2 class="mb-4">
                          <strong>Chcesz otrzymywać regularne Instagramowe tipy? </strong>
                        </h2>
                           <a class="chatbot" href="https://m.me/robimyromans" target="_blank"><img src="<?php echo IMG_DIR; ?>/mess.jpg" alt=""> Dołącz do naszego Chatbota</a>
                    </div>
                    
                    <div class="col-12 p-xs-0 mt-5 d-none d-md-block">
                        <a href="#" class="footer-nav-item">REGULAMIN</a>
                        <a href="#" class="footer-nav-item">POLITYKA PRYWATNOŚĆI I COOKIES</a>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 col-xxl-3 pl-xxl-7 row d-flex pt-5 pt-md-0 pr-0 footer-media--container">
                    <div class="col-4 text-center">
                        <a href="https://www.facebook.com/robimyromans/" target="_blank">
                            <p class="footer-media-item">facebook</p>
                            <img src="<?php echo IMG_DIR; ?>/face.svg" alt="" class="img-fluid footer-media--img" />
                        </a>
                    </div>
                    <div class="col-4 text-center footer-media-container">
                        <a href="https://www.instagram.com/robimyromans/" target="_blank">
                            <p class="footer-media-item">instagram</p>
                            <img src="<?php echo IMG_DIR; ?>/insta.svg" alt="" class="img-fluid footer-media--img" />
                        </a>
                    </div>

                    <div class="col-4 text-center">
                        <a href="https://m.me/robimyromans" target="_blank">
                            <p class="footer-media-item">messenger</p>
                            <img src="<?php echo IMG_DIR; ?>/mess_f.png" alt="" class="img-fluid footer-media--img" />
                        </a>
                    </div>
                </div>
                <div class="col-12 p-xs-0 mt-5 d-block d-md-none">
                        <a href="#" class="footer-nav-item">REGULAMIN</a>
                        <a href="#" class="footer-nav-item">POLITYKA PRYWATNOŚĆI I COOKIES</a>
                    </div>
                <div class="col-12 p-xs-0">
                        <p class="footer-main-info">
                            ROBIMYROMANS.PL 2019 WSZELKIE PRAWA ZASTRZEŻONE. JAKIEKOLWIEK WYKORZYSTANIE MATERIAŁÓW
                            Z TEJ STRONY BEZ ZGODY AUTORA ZABRONIONE.
                        </p>
                    </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>