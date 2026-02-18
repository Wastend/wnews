<footer class="news-footer mt-5">
    @php
      $brandLogo = asset('favicon.png');
    @endphp
    <div class="container py-4 py-lg-5">
      <div class="news-footer__grid">
        <div class="news-footer__brand-col">
          <a href="{{ route('home.index') }}" class="d-inline-flex align-items-center text-decoration-none news-footer__brand">
            <img src="{{ $brandLogo }}" alt="WNews" class="news-brand-logo me-2">
            <span class="fw-bold">WNews</span>
          </a>
        </div>
        <div class="news-footer__nav-col">
          <div class="news-footer__title">Общее</div>
          <ul class="news-footer__list">
            <li><a href="{{ url('/news') }}" class="news-footer__link">Все новости</a></li>
            <li><a href="#" class="news-footer__link">Погода</a></li>
          </ul>
        </div>
        <div class="news-footer__nav-col">
          <div class="news-footer__title">
            <a href="{{ route('categories.index') }}" class="news-footer__title-link">Категории</a>
          </div>
          <ul class="news-footer__list">
            @foreach($navCategories as $category)
              <li>
                <a href="{{ route('news.category', $category) }}" class="news-footer__link">{{ $category->title }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="news-footer__copyright mt-3 pt-3">
        © {{ date('Y') }} WNews. Все права защищены.
      </div>
    </div>
  </footer>
