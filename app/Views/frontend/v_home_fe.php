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

      <!--==================== LOGOS ====================-->
      <section class="logos section">
        <div class="logos__container container grid">
          <div class="logos__img">
            <img src="<?= base_url(); ?>/template_frontend/assets/img/logo1.png" alt="" />
          </div>
          <div class="logos__img">
            <img src="<?= base_url(); ?>/template_frontend/assets/img/logo2.png" alt="" />
          </div>
          <div class="logos__img">
            <img src="<?= base_url(); ?>/template_frontend/assets/img/logo3.png" alt="" />
          </div>
          <div class="logos__img">
            <img src="<?= base_url(); ?>/template_frontend/assets/img/logo4.png" alt="" />
          </div>
        </div>
      </section>

      <!--==================== POPULAR ====================-->
      <section class="popular section" id="popular">
        <div class="container">
          <span class="section__subtitle">Post</span>
          <h2 class="section__title">Recent Post <span>.</span></h2>

          
          <div class="popular__container swiper">
            <div class="swiper-wrapper">
                <?php if($blog_list != null) {  ?>
                    <?php  foreach ($blog_list as $blog) { ?>
                        <article class="popular__card swiper-slide" onclick="window.location='<?= base_url('/blog/'.$blog->id); ?>';">
                            <img
                            src="<?= base_url(); ?>/img/<?= $blog->sampul; ?>"
                            alt=""
                            class="popular__img"
                            />
                            <div class="popular__data">
                            <h3 class="popular__title"><?= $blog->judul; ?></h3>
                            <p class="popular__description">
                                <?= $blog->deskripsi; ?>
                            </p>
                            </div>
                        </article>
                        <?php } ?>
                <?php } else { ?>
                <article class="popular__card swiper-slide">
                <img
                  src="<?= base_url(); ?>/template_frontend/assets/img/popular4.jpg"
                  alt=""
                  class="popular__img"
                />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>62,024</h2>
                  <h3 class="popular__title">Luxurious City Garden</h3>
                  <p class="popular__description">
                    Street The Garden City Of Miraflores, Lima - Peru Av. Sol
                    #9876
                  </p>
                </div>
              </article>
              <?php } ?>
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
          <div class="value__images">
            <div class="value__orbe"></div>
            <div class="value__img">
              <img src="<?= base_url(); ?>/template_frontend/assets/img/value.jpg" alt="" />
            </div>
          </div>

          <div class="value__content">
            <div class="value__data">
              <span class="section__subtitle">Our Value</span>
              <h2 class="section__title">Value We Give To You<span>.</span></h2>
              <p class="value__description">
                We always ready to help by providing the best service for you.
                We believe a good place to live can make your life better.
              </p>
            </div>

            <div class="value__accordion">
              <div class="value__accordion-item">
                <header class="value__accordion-header">
                  <i class="bx bxs-shield-x value__accordion-icon"> </i>
                  <h3 class="value__accordion-title">
                    Best interest rates on the market
                  </h3>
                  <div class="value__accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>
                <div class="value__accordion-content">
                  <div class="value__accordion-description">
                    Price we provides is the best for you, we guarantee no price
                    changes on your property due to various unexpected costs
                    that may come.
                  </div>
                </div>
              </div>
              <div class="value__accordion-item">
                <header class="value__accordion-header">
                  <i class="bx bxs-x-square value__accordion-icon"></i>
                  <h3 class="value__accordion-title">
                    Prevent unstable prices
                  </h3>
                  <div class="value__accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>
                <div class="value__accordion-content">
                  <div class="value__accordion-description">
                    Price we provides is the best for you, we guarantee no price
                    changes on your property due to various unexpected costs
                    that may come.
                  </div>
                </div>
              </div>
              <div class="value__accordion-item">
                <header class="value__accordion-header">
                  <i class="bx bxs-bar-chart-square value__accordion-icon"></i>
                  <h3 class="value__accordion-title">
                    Best prices on the market
                  </h3>
                  <div class="value__accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>
                <div class="value__accordion-content">
                  <div class="value__accordion-description">
                    Price we provides is the best for you, we guarantee no price
                    changes on your property due to various unexpected costs
                    that may come.
                  </div>
                </div>
              </div>
              <div class="value__accordion-item">
                <header class="value__accordion-header">
                  <i class="bx bxs-check-square value__accordion-icon"></i>
                  <h3 class="value__accordion-title">Security of your data</h3>
                  <div class="value__accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>
                <div class="value__accordion-content">
                  <div class="value__accordion-description">
                    Price we provides is the best for you, we guarantee no price
                    changes on your property due to various unexpected costs
                    that may come.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

          <!--==================== POPULAR ====================-->
      <section class="popular section" id="popular">
        <div class="container">
          <span class="section__subtitle">Best Choice</span>
          <h2 class="section__title">Popular Project <span>.</span></h2>

          <div class="popular__container swiper">
            <div class="swiper-wrapper">
              <article class="popular__card swiper-slide">
                <img
                  src="<?= base_url(); ?>/template_frontend/assets/img/popular1.jpg"
                  alt=""
                  class="popular__img"
                />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>66,356</h2>
                  <h3 class="popular__title">Garden City Assat</h3>
                  <p class="popular__description">
                    Street The Garden City Of Miraflores, Lima - Perú Av. Sol
                    #9876
                  </p>
                </div>
              </article>

              <article class="popular__card swiper-slide">
                <img
                  src="<?= base_url(); ?>/template_frontend/assets/img/popular2.jpg"
                  alt=""
                  class="popular__img"
                />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>35,159</h2>
                  <h3 class="popular__title">Gables Luxurious House</h3>
                  <p class="popular__description">
                    Street The Garden City Of Miraflores, Lima - Peru Av. Sol
                    #9876
                  </p>
                </div>
              </article>

              <article class="popular__card swiper-slide">
                <img
                  src="<?= base_url(); ?>/template_frontend/assets/img/popular3.jpg"
                  alt=""
                  class="popular__img"
                />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>75,043</h2>
                  <h3 class="popular__title">Garden Orchard City</h3>
                  <p class="popular__description">
                    Street The Garden City Of Miraflores, Lima - Peru Av. Sol
                    #9876
                  </p>
                </div>
              </article>

              <article class="popular__card swiper-slide">
                <img
                  src="<?= base_url(); ?>/template_frontend/assets/img/popular4.jpg"
                  alt=""
                  class="popular__img"
                />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>62,024</h2>
                  <h3 class="popular__title">Luxurious City Garden</h3>
                  <p class="popular__description">
                    Street The Garden City Of Miraflores, Lima - Peru Av. Sol
                    #9876
                  </p>
                </div>
              </article>

              <article class="popular__card swiper-slide">
                <img
                  src="<?= base_url(); ?>/template_frontend/assets/img/popular5.jpg"
                  alt=""
                  class="popular__img"
                />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>47,043</h2>
                  <h3 class="popular__title">Aliva Private Garden</h3>
                  <p class="popular__description">
                    Street The Garden City Of Miraflores, Lima - Peru Av. Sol
                    #9876
                  </p>
                </div>
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


      <!--==================== CONTACT ====================-->
      <section class="contact section" id="contact">
        <div class="contact__container container grid">
          <div class="contact__images">
            <div class="contact__orbe"></div>

            <div class="contact__img">
              <img src="<?= base_url(); ?>/template_frontend/assets/img/contact.png" alt="" />
            </div>
          </div>
          <div class="contact__content">
            <div class="contact__data">
              <span class="section__subtitle">Contact Us</span>
              <h2 class="section__title">Easy to Contact us<span>.</span></h2>
              <p class="contact__description">
                Is there a problem finding your dream home? Need a guide in
                buying first home? or need a consultation on residential issues?
                just contact us.
              </p>
            </div>
            <div class="contact__card">
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-phone-call"></i>
                  <div>
                    <h3 class="contact__card-title">Call</h3>
                    <p class="contact__card-description">022.321.165.19</p>
                  </div>
                </div>
                <button class="button contact__card-button">Call Now</button>
              </div>

              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-message-rounded-dots"></i>
                  <div>
                    <h3 class="contact__card-title">Chat</h3>
                    <p class="contact__card-description">022.321.165.19</p>
                  </div>
                </div>
                <button class="button contact__card-button">hat Now</button>
              </div>

              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-video"></i>
                  <div>
                    <h3 class="contact__card-title">Video Call</h3>
                    <p class="contact__card-description">022.321.165.19</p>
                  </div>
                </div>
                <button class="button contact__card-button">
                  Video Call Now
                </button>
              </div>

              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-envelope"></i>
                  <div>
                    <h3 class="contact__card-title">Message</h3>
                    <p class="contact__card-description">022.321.165.19</p>
                  </div>
                </div>
                <button class="button contact__card-button">Message Now</button>
              </div>
            </div>
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
