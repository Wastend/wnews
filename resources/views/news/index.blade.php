@extends('layouts.main')
@section('title', request()->routeIs('home.index') ? 'WNews' : 'Все новости')
@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('news.create') }}" class="btn btn-primary">Создать новость</a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
            @forelse($news as $post)
                <div class="col">
                    @php
                        $imageSrc = $post->image
                            ? (filter_var($post->image, FILTER_VALIDATE_URL) ? $post->image : asset('images/' . ltrim($post->image, '/')))
                            : 'https://via.placeholder.com/640x360?text=News';
                    @endphp
                    <article class="card h-100 shadow-sm news-card">
                        <a href="{{ route('news.show', $post) }}" class="text-decoration-none">
                            <img
                                src="{{ $imageSrc }}"
                                class="card-img-top news-card__image"
                                alt="{{ $post->title }}"
                                loading="lazy"
                            >
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                <a href="{{ route('news.show', $post) }}" class="text-dark text-decoration-none">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <p class="card-text text-muted mb-0">
                                {{ $post->description }}
                            </p>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-info mb-0">Новостей пока нет.</div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $news->links() }}
        </div>
    </div>
@endsection
