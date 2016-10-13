@extends('layouts.admin_master')

@section('content')
    <div class="col-md-12">

        <div class="container">

            <a class="btn btn-success" href="/image/create">New Image</a>
            @foreach($images->chunk(3) as $imageChunk)


                <div class="col-md-9 " data-wow-delay="0.4s" id="transist">

                    <div class="educate_grid">
                        @foreach($imageChunk as $image)
                            <div class="col-md-4 room-grid" style="margin-bottom: 4%">
                                <div class="living_box">
                                    <a href="/image/{{ $image->id }}">
                                            <img src="/uploads/{{ $image->name }}" class="img-responsive" alt=""/>
                                    </a>
                                </div>
                                <div class="img-details">
                                    <h3>{{ $image->title }}</h3>
                                    <hr>
                                    <p>{{ str_limit($image->description, 100) }}</p>
                                </div>

                                <hr>
                                <div class="img-actions">
                                    <a href="/image/{{ $image->id }}">show |</a>
                                    <a href="/image/{{ $image->id }}/edit">edit |</a>
                                    <a href="{{ action('ImageController@destroy',['id' => $image->id]) }}">delete</a>
                                </div>


                            </div>
                        @endforeach

                        <div class="clearfix"></div>
                    </div>

                    <script type="text/javascript">
                        if(Modernizr.csstransitions){
                            document.getElementById('transist').className = "col-md-9 wow fadeInRight";
                        }
                        else
                        {

                        }
                    </script>
                </div>
            @endforeach
        </div>
    </div>

        </div>
    </div>
@endsection