@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ $post->patchFullImg() }}" class="thumbnail">
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection