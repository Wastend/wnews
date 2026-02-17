<header class="news-header">
    @php
      $biSprite = asset('vendor/bootstrap-icons/bootstrap-icons.svg');
      $brandLogo = asset('favicon.png');
      $isHome = request()->routeIs('home.index');
      $isNews = request()->is('news') || request()->is('news/*');
    @endphp
    <div class="px-3 py-2 bg-blue-200 text-dark">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between gap-3">
          <a href="{{ route('home.index') }}" class="d-flex align-items-center text-dark text-decoration-none flex-shrink-0" aria-label="Главная">
            <img src="{{ $brandLogo }}" alt="WNews" class="news-brand-logo me-2">
            <span class="fw-bold news-header__brand-text">WNews</span>
          </a>

          <div class="d-flex align-items-center gap-1 flex-shrink-0">
            <button class="btn d-lg-none news-header__icon-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-label="Открыть меню">
              <svg class="bi" width="28" height="28" aria-hidden="true">
                <use href="{{ $biSprite }}#list"></use>
              </svg>
            </button>
          </div>

          <div class="ms-auto d-none d-lg-flex align-items-center gap-2">
            <ul class="nav my-2 my-md-0">
              <li>
                <a href="{{ url('/news') }}" class="nav-link news-header__nav-link {{ $isNews ? 'active' : '' }}">Все новости</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle news-header__nav-link" role="button" aria-expanded="false">Категории</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item news-header__dropdown-link" href="#">Политика</a></li>
                  <li><a class="dropdown-item news-header__dropdown-link" href="#">Экономика</a></li>
                  <li><a class="dropdown-item news-header__dropdown-link" href="#">Технологии</a></li>
                  <li><a class="dropdown-item news-header__dropdown-link" href="#">Спорт</a></li>
                  <li><a class="dropdown-item news-header__dropdown-link" href="#">Культура</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="nav-link news-header__nav-link">Погода</a>
              </li>
            </ul>

            <form class="news-header__search-desktop ms-lg-2 my-2">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileNavLabel">Меню</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form class="mb-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link news-header__nav-link {{ $isHome ? 'active' : '' }}">Главная</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/news') }}" class="nav-link news-header__nav-link {{ $isNews ? 'active' : '' }}">Все новости</a>
          </li>
          <li class="nav-item mt-2 mb-1 px-3 news-header__menu-label">Категории</li>
          <li class="nav-item">
            <a href="#" class="nav-link news-header__submenu-link">Политика</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link news-header__submenu-link">Экономика</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link news-header__submenu-link">Технологии</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link news-header__submenu-link">Спорт</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link news-header__submenu-link">Культура</a>
          </li>
          <li class="nav-item mt-2">
            <a href="#" class="nav-link news-header__nav-link">Погода</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
