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

    <title>Peta Infografis - Desa Wisata Melinggih Kelod</title>
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
                      <a href="/peta" class="nav__link active-link">
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
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/front.gif') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h1 class="islands__title">Peta Lokasi dan Infografis Desa</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
              <p>
                <h2>Peta Infografis Seputar Melinggih Kelod</h2>
              </p>
              <p>
                <img src="{{ asset('assets/img/seputar-desa.png') }}" alt="Seputar Desa" class="img-responsive">
              </p>
              <br />
              <p>
                <h2>Peta Topografi Seputar Desa Melinggih Kelod</h2>
              </p>
              <p>
                <img src="{{ asset('assets/img/topografi-desa.png') }}" alt="Topografi Desa" class="img-responsive">
              </p>
              <br />
              <p>
                <h2>Peta Desa Melinggih Kelod (Google Maps)</h2>
              </p>
              <p>
                <div class="map-responsive">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31572.041650901363!2d115.22040191355114!3d-8.450150561825637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd222febef5d55f%3A0x5030bfbca830e80!2sMelinggih%20Kelod%2C%20Kec.%20Payangan%2C%20Kabupaten%20Gianyar%2C%20Bali!5e0!3m2!1sid!2sid!4v1692716118921!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
                </div>
              </p>
            </div>
            <div class="package-travel">
              <h3 style="margin-bottom: 1rem">Destinasi Populer</h3>
              <article class="popular__card">
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
                      </div>
                  </a>
              </article>
              <article class="popular__card">
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
                      </div>
                  </a>
              </article>
              <article class="popular__card">
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
                      </div>
                  </a>
              </article>
              <article class="popular__card">
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
                      </div>
                  </a>
              </article>
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
              &#169; KKN-PPM XXVII Desa Melinggih Kelod 2023. All rights reserved
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
