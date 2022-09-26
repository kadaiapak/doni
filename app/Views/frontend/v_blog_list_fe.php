<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=============== FAVICON ===============-->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.png"
      type="image/x-icon"
    />
    <!--=============== BOXICONS ===============-->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="<?= base_url(); ?>/template_frontend/assets/css/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="<?= base_url(); ?>/template_frontend/assets/css/styles.css" />
    <link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">

    <title><?= $title; ?></title>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="<?= base_url('/'); ?>" class="nav__logo">
          Holux <i class="bx bxs-home-alt-2"></i>
        </a>

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="bx bx-home-alt-2"></i>
                <span>Home</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#popular" class="nav__link">
                <i class="bx bx-building-house"></i>
                <span>Residences</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="<?= base_url(); ?>/blog" class="nav__link">
                <i class="bx bx-building-house"></i>
                <span>Blog</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#value" class="nav__link">
                <i class="bx bx-award"></i>
                <span>Value</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="bx bx-phone"></i>
                <span>Contact</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Theme change button -->
        <i class="bx bx-moon change-theme" id="theme-button"></i>

        <a href="#" class="button nav__button"> Subscribe </a>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__data">
            <h1 class="home__title">
              Discover <br />
              Most Suitable <br />
              Property
            </h1>
            <p class="home__description">
              Find a variety of propertoes that suit you very easily, forget all
              difficulties in finding a residence for you
            </p>
            <form action="" class="home__search">
              <i class="bx bxs-map"></i>
              <input
                type="search"
                placeholder="Search by location"
                class="home__search-input"
              />
              <button class="button">Search</button>
            </form>

            <div class="home__value">
              <div>
                <h1 class="home__value-number">9k <span>+</span></h1>
                <span class="home__value-description">
                  Premium <br />
                  Product
                </span>
              </div>
              <div>
                <h1 class="home__value-number">2k <span>+</span></h1>
                <span class="home__value-description">
                  Happy <br />
                  Customer
                </span>
              </div>
              <div>
                <h1 class="home__value-number">28k <span>+</span></h1>
                <span class="home__value-description">
                  Awards <br />
                  Winnning
                </span>
              </div>
            </div>
          </div>

          <div class="home__images">
            <div class="home__orbe"></div>
            <div class="home__img">
              <img src="<?= base_url(); ?>/template_frontend/assets/img/home.jpg" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!--==================== BLOG LIST ====================-->
      <section class="blog section">
        <div class="container">
            <h2 class="section__title">Latest Blog <span>.</span></h2>
            <div class="blog-card-group">
              <?php foreach ($blog_list as $bl) { ?>
                <div class="blog-card">
                  <div class="blog-card-banner">
                    <img src="<?= base_url(); ?>/img/<?= $bl->sampul; ?>" alt="" width="250" class="blog-banner-img">
                  </div>
                  <div class="blog-content-wrapper">
                    <button class="blog-topic text-tiny">Database</button>
                    <h3><?= $bl->judul; ?></h3> 
                    <p class="blog-text">
                      <?= $bl->deskripsi; ?>
                    </p>
                  </div>
                </div>
              <?php } ?>
             
          </div>
        </div>
       
      </section>


      <!--==================== SUBSCRIBE ====================-->
      <section class="subscribe section">
        <div class="subscribe__container container">
          <h1 class="subscribe__title">Get Started with Holux</h1>
          <p class="subscribe__description">
            Subscribe and find super attractive price quotes from us, Find your
            residence soon
          </p>
          <a href="#" class="button subscribe__button"> Get Started </a>
        </div>
      </section>
    </main>

    