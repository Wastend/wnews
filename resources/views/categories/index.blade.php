@extends('layouts.main')
@section('title', 'Категории')
@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h4 mb-0">Категории</h1>
            <a href="{{ route('news.index') }}" class="btn btn-outline-primary">Все новости</a>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
            @forelse($categories as $category)
                <div class="col">
                    <article class="card h-100 shadow-sm news-card">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">
                                <a href="{{ route('news.category', $category) }}" class="text-dark text-decoration-none">
                                    {{ $category->title }}
                                </a>
                            </h5>
                            <p class="card-text text-muted mb-3">
                                Новостей в категории: {{ $category->published_news_count }}
                            </p>
                            <div class="mt-auto">
                                <a href="{{ route('news.category', $category) }}" class="btn btn-sm btn-primary">Открыть категорию</a>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-info mb-0">Категории пока не добавлены.</div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
