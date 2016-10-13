@extends('layouts.admin_master')

@section('content')

    <div class="matter">
        <div class="container">

            <!-- Today status. jQuery Sparkline plugin used. -->

            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-success" href="/articles/create">New Article</a>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>body</th>
                            <th>image</th>
                            <th>last update</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ str_limit($article->title,200) }}</td>
                            <td>{{ str_limit($article->body,200) }}</td>
                            <td><a href="#" data-toggle="modal" data-target="#myModal{{ $article->id }}">{{ $article->image }}</a> </td>

                            <td>{{ $article->updated_at->diffForHumans() }}</td>
                            <td>
                                <a href="/articles/{{ $article->id }}">show |</a>
                                <a href="/articles/{{ $article->id }}/edit">edit |</a>
                                <a href="{{ action('ArticleController@destroy',['id' => $article->id]) }}">delete</a>
                            </td>
                        </tr>
                            <div class="modal fade" id="myModal{{ $article->id }}" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Image</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="/uploads/{{ $article->image }}" class="img img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection