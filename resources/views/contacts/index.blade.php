@extends('layouts.admin_master')

@section('content')

    <div class="matter">
        <div class="container">

            <!-- Today status. jQuery Sparkline plugin used. -->

            <div class="row">
                <div class="col-md-12">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>message</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <th>{{ $contact->id }}</th>
                                <th>{{ str_limit($contact->name,200) }}</th>
                                <th>{{ str_limit($contact->email,200) }}</th>
                                <th>{{ str_limit($contact->message,200) }}</th>
                                <th>{{ $contact->updated_at->diffForHumans() }}</th>
                                <th>
                                    <a href="/contacts/{{ $contact->id }}">show |</a>
                                    <a href="/contacts/{{ $contact->id }}/edit">edit |</a>
                                    <a href="{{ action('ContactController@destroy',['id' => $contact->id]) }}">delete</a>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection