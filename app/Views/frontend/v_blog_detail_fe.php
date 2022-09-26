
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

      <!--==================== SINGLE POST ====================-->
      <section class="singleblog section" id="singleblog">
        <div class="singleblog__container container">

            <div class="singleblog__data">
              <h2 class="section__title"><?= $blog->judul; ?><span> .</span></h2>
              <div class="section__subtitle">
                  <a href="#" class="link display-2 text-secondary px-1">
                    <i class="bx bx-user text-primary"></i>Admin Interior
                  </a>
                  <a href="#" class="link display-2 text-secondary px-1">
                    <i class="bx bxs-watch text-primary"></i><?= $blog->created_at; ?>
                  </a>
                  <a href="#" class="link display-2 text-secondary px-1">
                    <i class="bx bx-low-vision text-primary"></i><?= $blog->dilihat; ?>
                  </a>
              </div>
              <p class="singleblog__description">
                <?= $blog->deskripsi; ?>
              </p>
              <div class="singleblog__images">
                  <img src="/img/<?= $blog->sampul; ?>" alt="">
              </div>
            </div>

           

            <div class="singleblog__isi">
              <p>
                <?= $blog->isi; ?>
              </p>
            </div>
          
        </div>
      </section>
      
    </main>

   


