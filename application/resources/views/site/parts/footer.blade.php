<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="/"><img src="{{ asset('assets/site/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/categorias">Categories</a></li>
                        <li><a href="/news">Notícias</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>

            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
@include('site.parts.search')

<!-- Js Plugins -->
<script src="{{ asset('assets/site/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/site/js/player.js') }}"></script>
<script src="{{ asset('assets/site/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/site/js/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/site/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/site/js/main.js') }}"></script>

</body>
</html>
