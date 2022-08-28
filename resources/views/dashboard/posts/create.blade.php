@extends('dashboard.layouts.main')

@section('content')
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h2>Create New Post</h2>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/posts" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
        @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
      <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" required>
          <option selected hidden value="">Select category</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
          @endforeach
        </select>
        @error('category_id')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <img class="img-fluid col-sm-5 d-block" id="img-preview">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
          <div class="text-danger">{{ $message }}</div>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Create post</button>
    </form>
  </div>
@endsection