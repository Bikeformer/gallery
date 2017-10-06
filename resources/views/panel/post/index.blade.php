@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @foreach($posts as $post)
                            <div class="col-xs-6 col-md-6">
                                <a href="{{ route('posts.edit', $post->id) }}" class="thumbnail">
                                    <img src="{{ $post->patchLiteImg() }}" alt="...">
                                </a>
                            </div>
                        @endforeach

                        <div class="form-group col-xs-12 col-xs-offset-0">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary" role="button">Add image</a>
                        </div>

                    </div>
                </div>

                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection