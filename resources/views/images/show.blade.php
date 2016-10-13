@extends('layouts.admin_master')

@section('content')
    <div class="col-md-6">
        <div class="show-image">
            <img src="/uploads/{{ $image->name }}" class="img img-rounded img-responsive" height="100%" width="100%">
        </div>
    </div>
    <div class="col-md-5">
        <div class="img-description">
            <h3>{{ $image->title }}</h3>
            <hr>
            <p>{{ $image->description }}</p>
        </div>
        <div class="img-actions">
            <a href="/image/">show all |</a>
            <a href="/image/{{ $image->id }}/edit">edit |</a>
            <a href="{{ action('ImageController@destroy',['id' => $image->id]) }}">delete</a>
        </div>
    </div>
@endsection