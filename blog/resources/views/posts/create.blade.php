@extends('app')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="type" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
            @error('title')
            <div class="invalid-feedback">
                {{ $errors->first('title') }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="type" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug">
            @error('slug')
            <div class="invalid-feedback">
                {{ $errors->first('slug') }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content"></textarea>
            @error('content')
            <div class="invalid-feedback">
                {{ $errors->first('content') }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
