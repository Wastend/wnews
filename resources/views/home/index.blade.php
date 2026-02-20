@extends('layouts.main')
@section('title', request()->routeIs('home.index') ? 'WNews' : 'Все новости')
@section('content')
    <div class="container py-4">
        Homepage
    </div>
@endsection

