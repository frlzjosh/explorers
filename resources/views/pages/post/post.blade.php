@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{$post->title}}</h2>
                    </div>

                    <div class="panel-body">
                        {{ $post->content }}
                        <br>
                        {{ $post->created_at->toFormattedDateString() }}
                        <br>
                        {{--@if($post->comments->content)--}}
                            {{--{{ $post->comments->content }} <br>--}}
                        {{--@endif--}}
                        <br>
                        <br>
                        {!! Form::open(['route' => 'comment.create']) !!}
                        {!! Form::hidden('post_id', $post->id) !!}
                        {!! Form::hidden('author_id', Auth::user()->id) !!}
                        <div class="form-group">
                            {!! Form::label('content', 'Comment', ['class' => 'control-label']) !!}
                            {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Comment', 'required' => 'required', 'autofocus' => 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
