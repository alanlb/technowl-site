</main>
    <footer>
        <div class="container">
            <div class="logo-footer" data-wow-duration="1.5s" data-wow-delay="0s">
                <a href="#"><img src="images/logo-footer.png" alt="Logo Footer Tag"></a>
            </div>
            <div class="social-medias">
                <a href="" class="wow flipInY" data-wow-duration="1s" data-wow-delay="1.5s"><img src="images/005-whatsapp.png" alt="Whatsapp Footer Tag"></a>
                <a href="" class="wow flipInY" data-wow-duration="1s" data-wow-delay="1s"><img src="images/027-linkedin.png" alt="Linkedin Footer Tag"></a>
                <a href="" class="wow flipInY" data-wow-duration="1s" data-wow-delay="0.5s"><img src="images/029-instagram.png" alt="Instagram Footer Tag"></a>
                <a href="" class="wow flipInY" data-wow-duration="1s" data-wow-delay="0s"><img src="images/gmail.svg" alt="Gmail Footer Tag"></a>
            </div>
            <div class="copy-right">
                <p>2020, Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js"
        integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <script src="bower_components/wow/dist/wow.min.js"></script>
    <script>
        new WOW().init()
        var nav = $('#navbar-bg')
        var height = nav.height()
        $('.navbar-toggle').click(function () {
            if (window.pageYOffset < height) {
                nav.toggleClass('bg-dark')
            }
            $('#body').toggleClass('stop-scrolling')
        })
        window.onscroll = function () {
            if (window.pageYOffset > height) {
                nav.addClass('bg-dark')
            } else {
                nav.removeClass('bg-dark')
            }
        }
        $('header>div>h3').addClass('h3-bg')
    </script>
</body>

</html>