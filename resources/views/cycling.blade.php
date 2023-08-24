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

    <title>Cycling - Desa Wisata Melinggih Kelod</title>
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
              <img src="{{ asset('assets/img/cycling_cover1.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Bersepeda Berkeliling Desa</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 2 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/cycling_cover2.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Bersepeda Berkeliling Desa</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 3 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/cycling_cover3.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Bersepeda Berkeliling Desa</h1>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
          <div class="controls__container swiper-wrapper">
            <img
              src="{{ asset('assets/img/cycling_cover1.jpg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset('assets/img/cycling_cover2.jpg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset('assets/img/cycling_cover3.jpg') }}"
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
                Sebagian besar wilayah desa Melinggih Kelod merupakan lahan pertanian. Salah satu lahan yang bisa dimanfaatkan sebagai objek wisata adalah hamparan sawah yang luas (<i>Rice Terrace</i>). Biasanya pemandangan hamparan sawah menjadi objek wisata yang digemari oleh wisatawan mancanegara karena kondisi alam yang masih alami dan jarang ditemui di tempat asal mereka. Tak hanya sebagai objek wisata, namun dengan adanya hamparan sawah yang luas ini juga bisa dijadikan sebagai tempat rekreasi wisata yaitu dengan bersepeda. 
              </p>
              <p>
                Bersepeda merupakan olahraga yang banyak digemari oleh masyarakat, tentunya juga dengan bersepeda bisa juga sambil menikmati pemandangan yang indah di sekitaran rute yang dilewatinya khususnya yaitu di hamparan sawah (<i>Rice Terrace</i>). Dengan bersepeda juga bisa membantu untuk menjaga kesehatan kita agar tetap badan kita tetap bugar dan menjadikan pola hidup kita semakin sehat. Selain itu Adapun juga manfaat lainnya juga yakni dapat memperkuat otot kaki, membantu menurunkan berat badan dan juga sebagai <i>stress healing</i> yang baik. 
              </p>
              <p>
                Tentunya di desa melinggih kelod ini, banyak sekali wisatawan ataupun warga lokal yang kerap mengunjungi tempat penyewaan sepeda untuk bersepeda bersama dengan teman-teman ataupun keluarga. terkadang ada juga yang bersepeda di pagi hari ataupun di sore hari dengan menikmati sunset yang ada disekitaran wilayah desa. 
              </p>
            </div>
            <div class="package-travel">
              <h3>Lokasi Cycling</h3>
              <div class="card">
                <h1><b>MTB Ubud</b></h1>
                Banjar Begawan, Melinggih Kelod, Kec. Payangan, Kabupaten Gianyar, Bali 80572
                <br />
                087861223525
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
