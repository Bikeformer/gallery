@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @foreach($posts as $post)
                            <div class="col-xs-6 col-md-6">
                                <a href="{{ route('home.posts.show', $post->id) }}" class="thumbnail">
                                    <img src="{{ $post->patchLiteImg() }}">
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>

                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection