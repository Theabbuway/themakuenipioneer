@extends('layouts.master')

@section('content')
        <!-- //banner -->
<div class="gallery">
    <div class="container">
        <h3 class="title"> Machinery </h3>
        <div class="gallery_gds">
            <ul class="simplefilter ">
                <li class="active" data-filter="all">All</li>
                <li data-filter="1">Category</li>
                <li data-filter="2">Category1</li>
                <li data-filter="3">Category2</li>
                <li data-filter="4">Category3</li>
            </ul>
            <div class="filtr-container ">
                @foreach($images as $image)
                    <div class=" col-md-4 filtr-item" data-category="{{ random_int(1,5) }} , {{ random_int(1,5) }}" data-sort="{{ array_rand($sorts) }}">
                        <a href="/uploads/{{ $image->name }}" class="b-link-stripe b-animate-go  swipebox">
                            <div class="item item-type-double">
                                <div class="item-hover">
                                    <div class="item-info">
                                        <div class="date">MAKUENI PIONEER</div>
                                        <div class="line"></div>
                                        <div class="headline">{{ $image->title }}</div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="mask"></div>
                                </div>
                                <div class="item-img"><img src="/uploads/{{ $image->name }}" alt=" " /></div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- Include jQuery & Filterizr -->

    <script src="js/jquery.filterizr.js"></script>
    <script src="js/controls.js"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
    <!--//gallery-->
    <!-- swipe box js -->
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!-- //swipe box js -->
</div>

@endsection