    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="<?= base_url('/'); ?>" class="nav__logo">
          Holux <i class="bx bxs-home-alt-2"></i>
        </a>
        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="<?= base_url('/'); ?>" class="nav__link">
                <i class="bx bx-home-alt-2"></i>
                <span>Home</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="<?= base_url(); ?>/blog" class="nav__link <?= $segment == 'blog' ? 'active-link' : null ?>">
                <i class="bx bx-building-house"></i>
                <span>Blog</span>
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
      <section class="blog section" id="blog">
        <div class="container">
            <h2 class="section__title">Latest Blog <span>.</span></h2>
            <div class="blog__container">
              <div>
                <?php foreach ($blog_list as $bl) { ?>
                  <article class="blog__card grid">
                    <img src="<?= base_url(); ?>/img/<?= $bl->sampul; ?>" alt="" class="blog__img">
                    <div class="blog__data">
                        <h2 class="blog__price">
                          <?php $waktu = substr($bl->created_at,11,5); ?>
                            <?= $bl->nama_user.' | '.date('d M, Y',strtotime($bl->created_at)); ?>
                        </h2>
                        <h3 class="blog__title">
                          <?= $bl->judul; ?>
                        </h3>
                        <p class="blog__description">
                          <?= $bl->deskripsi; ?>
                        </p>
                    </div>
                  </article>
                <?php } ?> 
              </div>
            </div>
        </div>
       
      </section>


    