@extends('dashboard.layouts.main')

@section('content')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h2>Post Categories</h2>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new Category</a>
    <div class="table-responsive col-md-6">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge text-bg-info"><span data-feather="eye"></span></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge text-bg-warning"><span data-feather="edit"></span></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn badge text-bg-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection