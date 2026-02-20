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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        .news-brand-logo {
            width: 32px;
            height: 32px;
            border-radius: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @php
        $brandLogo = asset('favicon.png');
    @endphp

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home.index') }}" class="brand-link">
            <img src="{{ $brandLogo }}" alt="WNews" class="news-brand-logo me-2">
            <span class="fw-bold news-header__brand-text">WNews</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            @include('components.admin.nav')
        </div>
    </aside>

    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
<!-- ./wrapper -->

</body>
</html>
