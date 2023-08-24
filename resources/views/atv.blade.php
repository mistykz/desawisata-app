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
    <link rel="stylesheet" href="{{ asset('assets/libraries/swiper-bundle.min.css') }}" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <title>ATV - Desa Wisata Melinggih Kelod</title>
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
                      <a href="/all-destination" class="nav__link active-link">
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
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/atv_cover1.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Aktivitas Mengendarai ATV</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 2 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/atv_cover2.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Aktivitas Mengendarai ATV</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 3 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/atv_cover3.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Aktivitas Mengendarai ATV</h1>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
          <div class="controls__container swiper-wrapper">
            <img
              src="{{ asset('assets/img/atv_cover1.jpg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset('assets/img/atv_cover2.jpg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset('assets/img/atv_cover3.jpg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
          </div>
        </div>
      </section>

      <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
              <p>
                <h2>ATV Adventure : Menaklukkan Medan Terjal yang Mendebarkan</h2>
              </p>
              <p>
                Bagi mereka yang mencari petualangan di darat, ATV adventure adalah pilihan yang tepat di Desa Melinggih Kelod. ATV (All-Terrain Vehicle) adalah kendaraan empat roda yang dirancang untuk menjelajahi medan apapun, dari lumpur hingga bukit berbatu.
              </p>
              <p>
                Dengan pemandangan alam yang indah sebagai latar belakang, pengunjung dapat menaklukkan medan yang beragam sambil merasakan kebebasan berkendara di tengah alam yang mengagumkan. Jalur ATV adventure di Desa Melinggih Kelod akan membawa Anda melintasi lereng-lereng bukit, hutan-hutan lebat, dan sungai-sungai kecil, memberikan pengalaman yang tak hanya mengasyikkan tetapi juga menghubungkan Anda dengan alam.
              </p>
              <p>
                Salah satu tempat ATV di Melinggih Kelod ini yang paling terkenal adalah KUBER Bali ATV Adventure. Trek yang berlimpah dan beragam akan membuat adrenalin anda terpacu, mereka memiliki gua yang merupakan salah satu trek dari mereka. Melintasi hamparan sawah, perkebunan dengan udara yang sejuk, kemudian menuruni lembah curam tetapi aman dengan instruktur professional yang mereka punya. KUBER Bali ATV Adventure ini merupakan spot wajib yang harus dikunjungi selama berlibur di Bali. Mereka memiliki website dan sosial media aktif yang dapat dikunjungi sebagai berikut kuberbaliadventure.com
              </p>
            </div>
            <div class="package-travel">
              <h3>Lokasi ATV</h3>
              <div class="card">
                <h1><b>Kuber Bali Adventures</b></h1>
                Br Bayad, Melinggih Kelod, Kec. Payangan, Kabupaten Gianyar, Bali.
                <br />
                082237498024
                <br /><br />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center"
            >Related Places & Destinations</span
          >
          <h2 class="section__title" style="text-align: center">
            The Best Places & Destinations
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
    <script>
      let galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 0,
        slidesPerView: 0,
      });

      let galleryTop = new Swiper('.gallery-top', {
        effect: 'fade',
        loop: true,

        thumbs: {
          swiper: galleryThumbs,
        },
      });
    </script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
