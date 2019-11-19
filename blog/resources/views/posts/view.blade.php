@extends('app')

@section('content')
    <div class="row">
        <h1>{{ $post->title }}</h1>
        {!! $post->content !!}
        <a href="{{ route('posts.index') }}" class="btn btn-warning">vissza</a>
    </div>
@endsection
