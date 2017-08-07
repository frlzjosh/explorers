@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Forum Posts</strong>
                </div>
                @if(!empty($posts))
                    @foreach($posts as $post)
                        <div class="panel-body">
                            <h2><a href="{{ route('post.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
                            by: <a href="{{ route('profile.show', ['id' => $post->author_id]) }}">{{ $post->author->user_name }}</a>
                            <br>
                            posted on: {{ $post->created_at->toFormattedDateString() }}
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
