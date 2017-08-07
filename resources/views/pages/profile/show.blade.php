@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $user->user_name }}'s Profile
                    </div>
                    <div class="panel-body">
                        <p><strong>User Name: </strong> {{ $user->user_name }}</p>
                        <p><strong>Biography: </strong> {{ $user->biography }}</p>
                        <p><strong>Member since: </strong> {{ $user->created_at->toFormattedDateString() }}</p>
                        <p><strong>Posts</strong></p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Posts
                    </div>
                    <div class="panel-body">
                        @foreach($user->posts as $post)
                            <a href="{{route('post.show', ['id' => $post->id])}}">{{$post->title}}</a><br>
                            {{ $post->created_at->toFormattedDateString() }}
                            <hr>
                            <br>
                        @endforeach
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Comments
                    </div>
                    <div class="panel-body">
                        @foreach($user->comments as $comment)
                            <a href="{{route('post.show', ['id' => $post->id])}}">{{$comment->conten}}</a><br>
                            {{ $comment->content }} <br>
                            {{ $comment->created_at->diffInMinutes() }} minutes ago<br>
                            {{ $comment->created_at->toFormattedDateString() }}
                            <hr>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
