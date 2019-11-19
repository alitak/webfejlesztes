@extends('app')

@section('content')
    <div class="row">
        <div class="col">
            @foreach($posts as $post)
                <div class="card mb-5">
                    <div class="card-header">
                        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </div>
                    <div class="card-body">
                        {!! $post->content !!}
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Tovább</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
