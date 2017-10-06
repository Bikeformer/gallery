@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <ul class="list-group">
                        {{ Form::open([ 'route' => ['posts.store'], 'files' => true]) }}

                        <div class="form-group col-xs-12 col-xs-offset-0">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::text('description', null, ['class' => 'form-control', 'required' => true,
                            'placeholder' => 'Description']) }}
                        </div>

                        <div class="form-group col-xs-12 col-xs-offset-0">
                            {{ Form::label('img', 'Image') }}
                            {{ Form::file('img', ['class' => 'form-control', 'required' => true,
                            'accept' => 'image/*']) }}
                        </div>

                        <div class="form-group col-xs-12 col-xs-offset-0">
                            <span style="float: right">
                                <button type="submit" class="btn btn-success">Save</button>
                            </span>

                            <a href="{{ route('posts.index') }}" class="btn btn-primary" role="button">Back</a>
                        </div>

                        {{ Form::close() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection