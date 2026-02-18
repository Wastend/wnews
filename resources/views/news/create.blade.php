@extends('layouts.main')
@section('title', 'Добавить новость')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="h4 mb-4">Добавить новость</h1>

                        <form id="newsCreateForm" action="{{ route('news.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Заголовок</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Введите заголовок">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Описание</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Краткое описание новости">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Текст новости</label>
                                <textarea class="form-control" id="content" name="content" rows="10">{{ old('content') }}</textarea>
                                @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Изображение (URL)</label>
                                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}" placeholder="https://example.com/image.jpg">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Категория новости</label>
                                <select class="form-control" name="category_id" id="category">
                                    @foreach($categories as $category)
                                        <option
                                            {{old('category_id') == $category->id ? 'selected' : ''}}
                                            value="{{ $category->id }}">{{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tags" class="form-label">Тэги новости</label>
                                <select class="form-select" multiple aria-label="тэги" name="tags[]" id="tags">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="1" id="is_published" name="is_published" {{ old('is_published', true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_published">
                                    Опубликовать сразу
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('newsCreateForm');
            ClassicEditor
                .create(document.querySelector('#content'), {
                    toolbar: [
                        'heading', '|',
                        'bold', 'italic', 'underline', 'link',
                        'bulletedList', 'numberedList', '|',
                        'insertTable', 'blockQuote', 'undo', 'redo'
                    ]
                })
        });
    </script>
@endsection
