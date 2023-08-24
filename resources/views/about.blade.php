<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <title>Tentang Kami - Desa Wisata Melinggih Kelod </title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/home"><img src="{{ asset('assets/img/logo_melko.png') }}" alt="Logo Desa Melinggih Kelod" width="48px"></a>
    
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="/home" class="nav__link">
                                <i class="bx bx-home-alt"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/peta" class="nav__link">
                                <i class="bx bx-map-alt"></i>
                                <span>Peta</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/all-destination" class="nav__link">
                                <i class="bx bx-building-house"></i>
                                <span>Jelajah Wisata</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/about" class="nav__link active-link">
                                <i class="bx bx-info-circle"></i>
                                <span>Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <!-- theme -->
                <i class="bx bx-moon change-theme" id="theme-button"></i>
    
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section>
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <!--========== ISLANDS 1 ==========-->
                        <section class="islands swiper-slide">
                            <img
                                src="{{ asset('assets/img/kantor-perbekel.jpg') }}"
                                alt=""
                                class="islands__bg"
                            />
                            <div class="bg__overlay">
                                <div class="islands__container container">
                                    <div class="islands__data">
                                        <h1 class="islands__title">
                                            Tentang Kami
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>

            <!-- contact -->
            <!--==================== CONTACT ====================-->
            <section class="contact section" id="contact">
                <div class="contact__container container grid">
                    <div class="contact__images">
                        <div>
                            <img src="{{ asset('assets/img/melko-front.png') }}" alt="Front Melko">
                        </div>
                    </div>

                    <div class="contact__content">
                        <div class="contact__data">
                            <span class="section__subtitle">Tentang Kami</span>
                            <h2 class="section__title">
                                Jangan ragu untuk menghubungi kami
                            </h2>
                            <p class="contact__description">
                                Berikut merupakan kontak dari Desa Melinggih Kelod
                                yang dapat anda hubungi.
                            </p>
                        </div>

                        <div class="contact__card">
                            <a href="https://goo.gl/maps/ZicJqT8JAoHR45my7" class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxs-map"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Kantor Desa
                                        </h3>
                                        <p class="contact__card-description">
                                            Jalan Raya Bayad No. 43 , Desa Melinggih Kelod, Kecamatan Payangan, Kabupaten Gianyar, Provinsi Bali, Indonesia, 80572.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="tel:+6281935280226" class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxs-phone-call"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Telepon
                                        </h3>
                                        <p class="contact__card-description">
                                            081935280226
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://web.facebook.com/Melinggihkelod" class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxl-facebook"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Facebook
                                        </h3>
                                        <p class="contact__card-description">
                                            Pemerintahan Desa Melinggih Kelod
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/melinggih_kelod" class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxl-instagram-alt"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Instagram
                                        </h3>
                                        <p class="contact__card-description">
                                            @melinggih_kelod
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="/home">
                        <img src="{{ asset('assets/img/desawisata.png') }}" alt="Logo Desa Melinggih Kelod" width="300px" height="300px">
                    </a>
                    <p class="footer__description">
                        Website Desa Wisata Resmi dari Pemerintah<br />
                        Desa Melinggih Kelod, Kecamatan Payangan,<br />
                        Kabupaten Gianyar
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Peta</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="/peta" class="footer__link">Peta Lokasi</a>
                            </li>
                            <li>
                                <a href="/peta" class="footer__link">Peta Infografis</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Jelajah</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="/all-destination" class="footer__link">Wisata Desa</a>
                            </li>
                    </div>
                    <div>
                        <h3 class="footer__title">Tentang Kami</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="https://melinggihkelod.desa.id/" class="footer__link"
                                    >Website Desa
                                </a>
                            </li>
                            <li>
                                <a href="/about" class="footer__link"> Kontak Kami</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Follow us</h3>

                        <ul class="footer__social">
                            <a href="https://www.facebook.com/Melinggihkelod" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="https://www.instagram.com/melinggih_kelod" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="https://www.youtube.com/@desamelinggihkelod4113" class="footer__social-link">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; <a href="https://www.instagram.com/kknmelinggihkelod_2023">KKN-PPM XXVII Desa Melinggih Kelod 2023.</a> All rights reserved
                </span>
                <div class="footer__privacy">
                    <a href="#">Terms & Agreements</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
