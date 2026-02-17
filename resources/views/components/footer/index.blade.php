<footer class="news-footer mt-5">
    @php
      $biSprite = asset('vendor/bootstrap-icons/bootstrap-icons.svg');
      $isNews = request()->is('news') || request()->is('news/*');
    @endphp
    <div class="container py-4 py-lg-5">
      <div class="news-footer__grid">
        <div class="news-footer__brand-col">
          <a href="{{ route('home.index') }}" class="d-inline-flex align-items-center text-decoration-none news-footer__brand">
            <svg class="bi me-2" width="28" height="22" role="img" aria-label="WNews">
              <use href="{{ $biSprite }}#newspaper"></use>
            </svg>
            <span class="fw-bold">WNews</span>
          </a>
        </div>
        <div class="news-footer__nav-col">
          <div class="news-footer__title">Общее</div>
          <ul class="news-footer__list">
            <li><a href="{{ url('/news') }}" class="news-footer__link {{ $isNews ? 'active' : '' }}">Все новости</a></li>
            <li><a href="#" class="news-footer__link">Погода</a></li>
          </ul>
        </div>
        <div class="news-footer__nav-col">
          <div class="news-footer__title">Категории</div>
          <ul class="news-footer__list">
            <li><a href="#" class="news-footer__link">Политика</a></li>
            <li><a href="#" class="news-footer__link">Экономика</a></li>
            <li><a href="#" class="news-footer__link">Технологии</a></li>
            <li><a href="#" class="news-footer__link">Спорт</a></li>
            <li><a href="#" class="news-footer__link">Культура</a></li>
          </ul>
        </div>
      </div>

      <div class="news-footer__copyright mt-3 pt-3">
        © {{ date('Y') }} WNews. Все права защищены.
      </div>
    </div>
  </footer>
