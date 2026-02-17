@extends('layouts.main')
@section('title', 'Редактировать новость')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="h4 mb-4">Редактировать новость</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="newsCreateForm" action="{{ route('news.update', $post->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="title" class="form-label">Заголовок</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" placeholder="Введите заголовок" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Описание</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Краткое описание новости">{{ old('description', $post->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Текст новости</label>
                                <textarea class="form-control" id="content" name="content" rows="10">{{ old('content', $post->content) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Изображение (URL)</label>
                                <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $post->image) }}" placeholder="https://example.com/image.jpg">
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="1" id="is_published" name="is_published" {{ old('is_published', $post->is_published) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_published">
                                    Опубликовать сразу
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Обновить новость</button>
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
                .then(function (editor) {
                    form.addEventListener('submit', function (event) {
                        var plainText = editor.getData().replace(/<[^>]*>/g, '').trim();
                        if (!plainText) {
                            event.preventDefault();
                            alert('Заполните поле "Текст новости".');
                        }
                    });
                })
                .catch(function (error) {
                    console.error(error);
                });
        });
    </script>
@endsection
