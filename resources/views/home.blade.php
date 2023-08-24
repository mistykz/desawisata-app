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

        <link rel="shortcut icon" href=" {{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href=" {{ asset('assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <title>Homepage - Desa Wisata Melinggih Kelod</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/home"><img src="{{ asset('assets/img/logo_melko.png') }}" alt="Logo Desa Melinggih Kelod" width="48px"></a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="/home" class="nav__link active-link">
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
                            <a href="/about" class="nav__link">
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
                <div class="swiper-container">
                    <div>
                        <!--========== ISLANDS 1 ==========-->
                        <section class="islands">
                            <img
                                src="{{ asset('assets/img/front_2.gif') }}"
                                alt=""
                                class="islands__bg"
                            />
                            <div class="bg__overlay">
                                <div class="islands__container container">
                                    <div
                                        class="islands__data"
                                        style="z-index: 99; position: relative"
                                    >
                                        <h1 class="islands__title">
                                            Desa Melinggih Kelod
                                        </h1>
                                        <p class="islands__description">
                                            It's the perfect village to explore and
                                            enjoy the beauty of the world.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
            
            <!--==================== POPULAR ====================-->
            <section class="section" id="popular">
                <div class="container">
                    <span class="section__subtitle" style="text-align: center"
                        >Pilihan Terbaik</span
                    >
                    <h2 class="section__title" style="text-align: center">
                        Destinasi Wisata Favorit
                    </h2>

                    <div class="popular__container swiper">
                        <div class="swiper-wrapper">
                            <article class="popular__card swiper-slide">
                                <a href="/rafting">
                                    <img
                                        src="{{ asset('assets/img/rafting_cover.jpeg') }}"
                                        alt=""
                                        class="popular__img"
                                    />
                                    <div class="popular__data">
                                        <h3 class="popular__title">
                                            Aktivitas Rafting
                                        </h3>
                                        <p class="popular__description">Nikmati pengalaman rafting yang mendebarkan di Desa Melinggih Kelod! Terletak di tengah-tengah keindahan alam Bali, desa ini menawarkan berbagai pengalaman petualangan arus sungai yang menakjubkan dan tak terlupakan.</p>
                                    </div>
                                </a>
                            </article>
                            <article class="popular__card swiper-slide">
                                <a href="/atv">
                                    <img
                                        src="{{ asset('assets/img/atv_cover.jpeg') }}"
                                        alt=""
                                        class="popular__img"
                                    />
                                    <div class="popular__data">
                                        <h3 class="popular__title">
                                            Aktivitas Mengendarai ATV
                                        </h3>
                                        <p class="popular__description">Jelajahi keindahan alam Desa Melinggih Kelod melalui petualangan ATV yang mengasyikkan! Melintasi jalan setapak dan medan yang menantang melewati sungai kecil, hamparan sawah, perkebunan, dan jalur yang menawarkan berbagai pemandangan yang sangat luar biasa.</p>
                                    </div>
                                </a>
                            </article>
                            <article class="popular__card swiper-slide">
                                <a href="/cycling">
                                    <img
                                        src="{{ asset('assets/img/cycling_cover.jpeg') }}"
                                        alt=""
                                        class="popular__img"
                                    />
                                    <div class="popular__data">
                                        <h3 class="popular__title">
                                            Bersepeda Berkeliling Desa
                                        </h3>
                                        <p class="popular__description">Indahnya petualangan bersepeda menyusuri panorama pedesaan Desa Melinggih Kelod yang memikat. Melalui jalur persawahan, perkebunan, dan pemukiman tradisional yang memberikan  rasa kedamaian dan ketenangan alam sambil berinteraksi dengan budaya setempat.</p>
                                    </div>
                                </a>
                            </article>
                            <article class="popular__card swiper-slide">
                                <a href="/pemandian-suci">
                                    <img
                                        src="{{ asset('assets/img/pancoran_cover.jpg') }}"
                                        alt=""
                                        class="popular__img"
                                    />
                                    <div class="popular__data">
                                        <h3 class="popular__title">
                                            Pemandian Suci
                                        </h3>
                                        <p class="popular__description">Ketika mengunjungi Desa Melinggih Kelod, jangan lewatkan wisata religi yang ada di dalamnya. Salah satu tempat yang bisa dikunjungi adalah Pancoran Sudhamala dan Pancoran Bulan. Kedua Pancoran ini dikenal memiliki sumber air suci yang ada didalamnya.</p>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="swiper-button-next">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="bx bx-chevron-left"></i>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VALUE ====================-->
            <section class="value section" id="value">
                <div class="value__container container grid">
                    <div>
                        <img src="{{ asset('assets/img/melko-front.png') }}" alt="Front Melko">
                    </div>

                    <div class="value__content">
                        <div class="value__data">
                            <span class="section__subtitle">Mengapa Harus Mengunjungi Desa Melinggih Kelod?</span>
                            <h2 class="section__title">
                                Pengalaman Yang Kami Janjikan Untuk Anda
                            </h2>
                            <p class="value__description">
                                Kami harapkan anda mendapatkan pengalaman berwisata yang sangat berkesan di Desa Melinggih Kelod ini. <br />Kami membuat pilihan destinasi wisata yang baik untuk bepergian ke Desa Melinggih Kelod.
                            </p>
                        </div>

                        <div class="value__accordion">
                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <i
                                        class="bx bxs-check-square value-accordion-icon"
                                    ></i>
                                    <h3 class="value__accordion-title">
                                        Desa yang bersih dan asri
                                    </h3>
                                    <div class="value__accordion-arrow">
                                        <i class="bx bxs-down-arrow"></i>
                                    </div>
                                </header>

                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                        Desa Melinggih Kelod memiliki lingkungan desa
                                        yang bersih serta asri.
                                    </p>
                                </div>
                            </div>
                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <i
                                        class="bx bxs-check-square value-accordion-icon"
                                    ></i>
                                    <h3 class="value__accordion-title">
                                        Desa yang tenang & jauh dari hiruk pikuk perkotaan
                                    </h3>
                                    <div class="value__accordion-arrow">
                                        <i class="bx bxs-down-arrow"></i>
                                    </div>
                                </header>

                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                        Desa Melinggih Kelod merupakan sebuah desa yang
                                        lingkungannya tenang dan jauh dari hiruk pikuk perkotaan.
                                    </p>
                                </div>
                            </div>
                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <i
                                        class="bx bxs-check-square value-accordion-icon"
                                    ></i>
                                    <h3 class="value__accordion-title">
                                        Destinasi wisata alam yang beragam
                                    </h3>
                                    <div class="value__accordion-arrow">
                                        <i class="bx bxs-down-arrow"></i>
                                    </div>
                                </header>

                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                        Desa Melinggih Kelod memiliki destinasi wisata alam
                                        yang sangat beragam, mulai dari wisata air, darat,
                                        dan lain sebagainya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- blog -->
            <section class="blog section" id="blog">
                <div class="container">
                    <span class="section__subtitle" style="text-align: center"
                        >Video Profile</span
                    >
                    <h2 class="section__title" style="text-align: center">
                        Tentang Desa Melinggih Kelod
                    </h2>

                    <div class="blog__content">
                        <div class="video-container">
                            <iframe
                              src="https://www.youtube.com/embed/VvsxBEhHpyU"
                              frameborder="0"
                              allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                              allowfullscreen></iframe>
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
