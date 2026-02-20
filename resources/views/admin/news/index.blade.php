@extends('layouts.admin')
@section('title', 'AdminPanel | WNews')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">News</h1>
                </div>
                <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                    <a href="/admin/news/create" class="btn btn-primary">Add News</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th style="width: 70px;">ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th style="width: 260px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($news as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ optional($item->category)->title }}</td>
                                    <td class="text-nowrap">
                                        <a href="/news/{{ $item->id }}" class="btn btn-sm btn-outline-info">View</a>
                                        <a href="/admin/news/{{ $item->id }}/edit" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="/admin/news/{{ $item->id }}/delete" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4">No news found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
