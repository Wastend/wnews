@extends('layouts.main')
@section('title', \Illuminate\Support\Str::limit($post->title, 50))
@section('content')
    <div class="container py-4">
        @php
            $imageSrc = $post->image
                ? (filter_var($post->image, FILTER_VALIDATE_URL) ? $post->image : asset('images/' . ltrim($post->image, '/')))
                : 'https://via.placeholder.com/1280x720?text=News';
        @endphp
        <article class="card border-0 shadow-sm overflow-hidden">
            <img
                src="{{ $imageSrc }}"
                class="img-fluid news-show__image"
                alt="{{ $post->title }}"
            >
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start gap-2 mb-3">
                    <h1 class="h3 mb-0">{{ $post->title }}</h1>
                    <div class="d-flex gap-2">
                        <a href="{{ route('news.edit', $post) }}" class="btn btn-outline-primary btn-sm">Редактировать</a>
                        <form action="{{ route('news.delete', $post) }}" method="post" onsubmit="return confirm('Удалить эту новость?');">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Удалить</button>
                        </form>
                    </div>
                </div>
                <p class="lead text-muted mb-4">{{ $post->description }}</p>
                <div class="mb-0 news-show__content">{!! $post->content !!}</div>
            </div>
        </article>
    </div>
@endsection
