@extends('layouts.admin_master')

@section('content')
    <div class="matter">
        <div class="container">

            <!-- Today status. jQuery Sparkline plugin used. -->

            <div class="row">
                <div class="col-md-12">

                    <h3>{{ $article->title }}</h3>
                    <hr>
                    <p>{{ $article->body }}</p>
                    <hr>
                    <a href="/articles/{{ $article->id }}/edit">edit</a> |
                    <a href="{{ action('ArticleController@destroy',['id' => $article->id]) }}">delete</a>
                </div>
            </div>

        </div>
    </div>
@endsection