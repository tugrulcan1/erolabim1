<footer class="pb-70" style="padding-top:80px !important">

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-contact">
                            <h3>İletişim</h3>
                            <ul>
                                <li>
                                    <i class="icofont-ui-message"></i>
                                    <a href="mailto:{{$settings['e-mail']}}">{{$settings['e-mail']}}</a>
                                </li>
                                <li>
                                    <i class="icofont-stock-mobile"></i>
                                    <a href="tel:{{$settings['phone']}}">Telefon: {{$settings['phone']}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-item">
                        <div class="footer-quick">
                            <h3>Hızlı Linkler</h3>
                            <ul>
                                <li>
                                    <a href="/page/about">Hakkımızda</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </footer>

<div class="copyright-area">
        <div class="container">
            <div class="copyright-item">
                <p>Copyright @
                    
                    <script>document.write(new Date().getFullYear())</script> <a href="https://hibootstrap.com/" target="_blank">innovaticacode</a>
                </p>
            </div>
        </div>
    </div>



<script src="{{ URL::to('/') }}/clientassets/assets/js/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/clientassets/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/owl.carousel.min.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/jquery.meanmenu.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/slick.min.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/jquery.magnific-popup.min.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/wow.min.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/form-validator.min.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/contact-form-script.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/odometer.min.js"></script>
    <script src="{{ URL::to('/') }}/clientassets/assets/js/jquery.appear.min.js"></script>

    <script src="{{ URL::to('/') }}/clientassets/assets/js/custom.js"></script>
<!-- MAIN JS -->
<script src="{{ URL::to('/') }}/js/script.js"></script>
@yield('scripts')
</div>
<!-- Wrapper / End -->

</body>



</html>
