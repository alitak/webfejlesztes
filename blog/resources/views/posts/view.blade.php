@extends('app')

@section('content')
    <div class="row mb-5">
        <div class="col">
        {!! $post->content !!}
            <a href="{{ route('posts.index') }}" class="btn btn-warning">vissza</a>
        </div>
    </div>
@endsection
