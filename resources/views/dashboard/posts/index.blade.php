@extends('dashboard.layouts.main')

@section('content')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h2>My Posts</h2>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new posts</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge text-bg-info"><span data-feather="eye"></span></a>
                            <a href="/dashboard/{{ $post->slug}}/edit" class="badge text-bg-warning"><span data-feather="edit"></span></a>
                            <a href="/dashboard/{{ $post->slug }}/" class="badge text-bg-danger"><span data-feather="trash-2"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection