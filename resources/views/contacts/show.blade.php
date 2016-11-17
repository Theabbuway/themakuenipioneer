@extends('layouts.admin_master')

@section('content')
    <div class="matter">
        <div class="container">

            <!-- Today status. jQuery Sparkline plugin used. -->

            <div class="row">
                <div class="col-md-12">

                    <h3>{{ $contact->name }}</h3>
                    <hr>
                    <p>{{ $contact->message }}</p>
                    <hr>
                    <a href="/contacts/{{ $contact->id }}/edit">edit</a> |
                    <a href="{{ action('ContactController@destroy',['id' => $contact->id]) }}">delete</a>
                </div>
            </div>

        </div>
    </div>
@endsection