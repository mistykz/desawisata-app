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

    <title>Rafting - Desa Wisata Melinggih Kelod</title>
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
              <img src="{{ asset('assets/img/rafting_cover1.jpeg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Aktivitas Rafting</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 2 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/rafting_cover2.jpeg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Aktivitas Rafting</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 3 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/rafting_cover3.jpeg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Aktivitas Rafting</h1>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
          <div class="controls__container swiper-wrapper">
            <img
              src="{{ asset('assets/img/rafting_cover1.jpeg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset('assets/img/rafting_cover2.jpeg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset('assets/img/rafting_cover3.jpeg') }}"
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
                Desa Melinggih Kelod terletak di Kabupaten Gianyar, Bali. Dengan pemandangan alam yang memukau dan keramahan penduduk setempat, desa ini telah menjadi destinasi populer bagi wisatawan yang mencari petualangan serta ingin merasakan kehangatan budaya Bali. Desa ini dikelilingi oleh perbukitan hijau yang menjulang tinggi, dan sungai-sungai yang mengalir dengan jernih di antara lembah-lembahnya. Keasrian alamnya membuat Desa Melinggih Kelod menjadi tempat yang ideal untuk aktivitas-aktivitas petualangan, terutama rafting dan ATV adventure.
              </p>
              <p>
                <h2>Rafting : Menguji Adrenalin di Arus Jeram yang Menantang</h2>
              </p>
              <p>
                Salah satu daya tarik utama Desa Melinggih Kelod adalah rafting di sungai-sungai yang melintasi daerah ini. Para pecinta petualangan air dapat merasakan sensasi mengarungi arus jeram yang mengasyikkan di tengah pemandangan alam yang memukau. Instruktur yang berpengalaman akan memandu peserta dalam pengalaman rafting yang mendebarkan ini, menjaga keselamatan sambil memberikan pengetahuan tentang lingkungan sekitar.
              </p>
              <p>
                Sungai-sungai di Desa Melinggih Kelod menawarkan berbagai tingkat kesulitan, sehingga baik pemula maupun pengalaman akan menemukan rute yang cocok. Dari arus jeram yang menantang hingga jalur yang lebih tenang, setiap pengalaman rafting di sini akan menghadirkan kegembiraan yang tak terlupakan.
              </p>
              <p>
                Kalian para pecinta petualangan arum jeram dan ingin merasakan asiknya menyusuri sungai wajib mengunjungi beberapa spot rafting yang ada di Desa Melinggih Kelod ini.
              </p>
              <p>
                <b>1)	Start Point Sobek Ayung Rafting</b>
              </p>
              <p>
                Sobek Ayung Rafting merupakan salah satu spot rafting tertua di Bali. Mengarungi sungai Ayung dengan tingkat kesulitan sungai untuk rafting di kelas II-III sehingga sangat cocok untuk pemula. Selama kurang lebih 2 jam anda akan dimanjakan oleh pemandangan alam selama menyusuri sungai ini. Dilansir dari websitenya Sobek Ayung Rafting mengklaim memiliki catatan keamanan 100%, sehingga anda tidak perlu khawatir dan dapat menikmati rafting dengan santai.
                Titik awal dari Sobek Ayung Rafting ini terletak di Jln. Begawan Giri, Melinggih Kelod, Begawan, Payangan, Kabupaten Gianyar, Bali 80353. Bagi kalian yang memasukan spot ini sebagai list wajib liburan kalian dapat mengunjungi website langsung dari Bali Sobek Adventure ini balisobek.com
              </p>
              <p>
                <b>2)	Surya Bintang Adventures</b>
              </p>
              <p>
                Surya Bintang Adventures terletak di Jln. Raya Payangan, Melinggih Kelod, Payangan, Kabupaten Gianyar, Bali 80572. Memiliki beragam aktivitas petualangan yang dapat dinikmat, mereka memiliki pilihan seperti Swing, Rafting, ATV, Cycling, dan Trekking. Trek yang dilaluinya pun beragam dan memanjakan mata dengan keindahan alam dari Desa Melinggih Kelod ini. Pemandu yang asik dan terlatih membuat Surya Bintang Adventures ini wajib masuk bucket list kalian. Adapun website yang dapat kalian kunjungi dari Surya Bintang Adventures adalah sebagai berikut suryabintangadventures.com
              </p>
              <p>
                <b>3)	Payung Rafting Bali</b>
              </p>
              <p>
                Payung Rafting Bali merupakan salah satu spot rafting tertua di Bali. Berdiri lebih dari belasan tahun dan terletak di Jln. Raya Payangan, Melinggih Kelod, Payangan, Kabupaten Gianyar, Bali 80572. Payung Rafting Bali mengarungi Sungai Ayung yang merupakan salah satu spot terfavorit di Indonesia. Payung Rafting Bali memiliki tim dan staff yang telah berpengalaman puluhan tahun. Adapun website dari Payung Rafting Bali ini adalah sebagai berikut Balipayungrafting.com
              </p>
              <p>
                Dan beberapa spot lainnya yang berada di Desa Melinggih Kelod.
              </p>
            </div>
            <div class="package-travel">
              <h3>Lokasi Rafting</h3>
              <div class="card">
                <h1><b>Start Point Sobek Ayung Rafting</b></h1>
                Jl. Begawan Giri, Melinggih Kelod, Begawan Payangan, Kabupaten Gianyar, Bali.
                <br />
                (0361) 729016
                <br /><br />
                <h1><b>Surya Bintang Adventures</b></h1>
                Jl. Raya Payangan, Melinggih Kelod, Kec. Payangan, Kabupaten Gianyar, Bali.
                <br />
                (0361) 973213
                <br /><br />
                <h1><b>Payung Rafting Bali</b></h1>
                Jalan Raya, Melinggih Kelod, Payangan, Gianyar Regency, Bali.
                <br />
                081933012088
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
