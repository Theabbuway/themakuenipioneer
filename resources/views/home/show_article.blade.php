@extends('layouts.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <div class="blog-image">
                    <img src="/uploads/{{ $article->image }}">
                </div>
            </div>
            <div class="col-md-6" style="padding: 5%">
                <div class="title" style="color: #828113; font-size: larger; text-align: center;">
                    <h3>{{ $article->title }}</h3>
                </div>
                <div class="body" style="padding: 2%; font-size: larger">
                    <p>{{ $article->body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection