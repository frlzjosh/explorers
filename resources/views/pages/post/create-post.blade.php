@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Create a new post</strong>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'post.store']) !!}
                        {!! Form::hidden('author_id', Auth::user()->id) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Content', ['class' => 'col-md-4 control-label']) !!}
                            {!! Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'Content', 'required' => 'required']) !!}
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