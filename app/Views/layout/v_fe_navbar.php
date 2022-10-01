    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="<?= base_url('/'); ?>" class="nav__logo">
          Interior Padang
        </a>
        <img src="<?= base_url('/interior_padang.jpg'); ?>" alt="">

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link <?= $segment == '' ? 'active-link' : null ?>">
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
