<!DOCTYPE html>
<html lang="en">
<head>
    @php
        $pageTitle = trim($__env->yieldContent('title'));
        $fullTitle = $pageTitle === '' ? 'WNews' : ($pageTitle === 'WNews' ? 'WNews' : $pageTitle . ' | WNews');
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $fullTitle }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('components.header.index')
<main class="site-main">
    @yield('content')
</main>
@include('components.footer.index')
<script src="{{ asset('js/app.js') }}"></script>
@if (session('success'))
    <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 2000;">
        <div id="appSuccessToast" class="toast text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastEl = document.getElementById('appSuccessToast');
            if (toastEl && window.bootstrap) {
                var toast = new window.bootstrap.Toast(toastEl, { delay: 2500 });
                toast.show();
            }
        });
    </script>
@endif
</body>
</html>
