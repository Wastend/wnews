@extends('layouts.admin')
@section('title', 'AdminPanel | WNews')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div>
                <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                    <a href="/admin/categories/create" class="btn btn-primary">Add Category</a>
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
                                <th style="width: 260px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td class="text-nowrap">
                                        <a href="/news/category/{{ $category->id }}" class="btn btn-sm btn-outline-info">View</a>
                                        <a href="/admin/categories/{{ $category->id }}/edit" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="/admin/categories/{{ $category->id }}/delete" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-4">No categories found</td>
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
