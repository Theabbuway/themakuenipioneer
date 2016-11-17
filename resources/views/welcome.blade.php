@extends('layouts.master')

@section('content')

        <!-- banner -->
<div class="banner">

    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li>
                <div class="banner1">
                    <div class="container">
                        <div class="banner-info">
                            <h3>We create  <span> purpose-built products For </span></h3>
                            <p>duty-driven people</p>
                            <ul>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Machinery</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Equipment </a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Factories</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Workers </a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Equipment</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Factories </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner2">
                    <div class="container">
                        <div class="banner-info">
                            <h3>We Plan To Give <span> Ideas For </span></h3>
                            <p>industrial Companies</p>
                            <ul>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Machinery</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Equipment </a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Factories</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Workers </a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Equipment</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Factories </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->

<!-- content -->
<div class="content">
    <div class="container">
        <h3>Our services</h3>
        <div class="col-md-7 content-left">
            <h4>Nam aliquam pretium feugiat duis <span>sem est eu interdum</span></h4>
            <p class="abt-para">Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac,
                suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est,
                sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus
                rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque
                rhoncus laoreet sed id tellus. Donec justo tellus.</p>
            <div class="col-md-6 bann-strip-grid">
                <div class="col-md-8 b-strip-right">
                    <h5>Excepteur sint</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
                <div class="col-md-4 b-strip-left">
                    <span class="glyphicon glyphicon-leaf hovicon effect-4 sub-b" aria-hidden="true"> </span>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 bann-strip-grid">
                <div class="col-md-8 b-strip-right">
                    <h5>Excepteur sint</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
                <div class="col-md-4 b-strip-left">
                    <span class="glyphicon glyphicon-fire hovicon effect-4 sub-b" aria-hidden="true"> </span>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-5 content-right">
            <div class="con-grids">
                <div class="con-lt text-center">
                    <span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
                    <h4>Voluptatem </h4>
                    <p>Nam aliquam pretium feugiat. Duis sem est,  eu interdum</p>
                </div>
                <div class="con-lt text-center">
                    <span class="glyphicon glyphicon-cog icon" aria-hidden="true"></span>
                    <h4>Accusantium </h4>
                    <p>Nam aliquam pretium feugiat. Duis sem est,  eu interdum</p>
                </div>
            </div>
            <div class="con-grids">
                <div class="con-lt text-center">
                    <span class="glyphicon glyphicon-fire icon" aria-hidden="true"></span>
                    <h4>Commodote</h4>
                    <p>Nam aliquam pretium feugiat. Duis sem est,  eu interdum</p>
                </div>
                <div class="con-lt text-center">
                    <span class="glyphicon glyphicon-leaf icon" aria-hidden="true"></span>
                    <h4>Aliquampret </h4>
                    <p>Nam aliquam pretium feugiat. Duis sem est,  eu interdum</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //content -->
<!-- quality -->
<div class="quality">
    <div class="container">
        <h3>Best Products</h3>
        <!-- #region Jssor Slider Begin -->

        <!-- Generator: Jssor Slider Maker -->
        <!-- Source: http://www.jssor.com/demos/carousel-slider.slider -->

        <!-- This demo works with jquery library -->
        <script type="text/javascript" src="/js/jssor.slider-21.1.5.mini.js"></script>
        <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
        <script>
            jQuery(document).ready(function ($) {

                var jssor_1_options = {
                    $AutoPlay: true,
                    $AutoPlaySteps: 1,
                    $SlideDuration: 160,
                    $SlideWidth: 400,
                    $scaleWidth: 1000,
                    $SlideSpacing: 30,
                    $Cols: 2,
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,
                        $Steps: 2
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$,
                        $SpacingX: 1,
                        $SpacingY: 1
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 809);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>

        <style>

            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url('/img/jssor/b03.png') no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l                  (normal)
            .jssora03r                  (normal)
            .jssora03l:hover            (normal mouseover)
            .jssora03r:hover            (normal mouseover)
            .jssora03l.jssora03ldn      (mousedown)
            .jssora03r.jssora03rdn      (mousedown)
            */
            .jssora03l, .jssora03r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url('/img/jssor/a03.png') no-repeat;
                overflow: hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03l.jssora03ldn { background-position: -243px -33px; }
            .jssora03r.jssora03rdn { background-position: -303px -33px; }
        </style>


        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 300px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('/img/jssor/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 600px; overflow: hidden;">
                @foreach($images as $image)
                    <div style="display: none;">
                        <a href="/gallery"><figure>
                                <img data-u="image" src="/uploads/{{ $image->name }}" alt="lovely" height="100%" width="100%">
                                <figcaption>
                                    <div class="fig-bor">
                                        <h4>{{ $image->title }}</h4>
                                        <p>
                                            {{ $image->description }}
                                        </p>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:21px;height:21px;">
                    <div data-u="numbertemplate"></div>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
        </div>

        <!-- #endregion Jssor Slider End -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- //quality -->

<div class="news-left">
    <div class="container">
        <h3>Portfolio</h3>
        {{-- */$index = 1/* --}}
        @foreach($articles as $article)
            @if($index%2 == 0)
                <div class="col-md-6 col-news ">
                    <div class="col-bottom two">
                        <h4>{{ $article->title }} </h4>
                        <p>{{ str_limit($article->body, 50) }}  </p>

                        <a href="/blog/{{ $article->id }}" class="smore">READ MORE</a>
                    </div>
                    <div class="col-news-top">
                        <div class="date-in">
                            <img class="img-responsive" src="images/a2.jpg" alt="">
                            <div class="month-in">
                                <span><img src="images/icon2.png" alt=" "></span>
                                <p>{{ $article->title }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-6 col-news-right ">
                    <div class="col-news-top">
                        <div class="date-in">
                            <img class="img-responsive" src="images/a1.jpg" alt="">
                            <div class="month-in">
                                <span><img src="images/icon1.png" alt=" "></span>
                                <p>{{ $article->title }}</p>
                            </div>
                        </div>
                        <div class="col-bottom two">
                            <h4>{{ $article->title }}</h4>
                            <p>{{ str_limit($article->body, 50) }}</p>

                            <a href="/blog/{{ $article->id }}" class="smore">READ MORE</a>
                        </div>
                    </div>
                </div>
            @endif
            {{-- */$index ++/* --}}
        @endforeach



        <div class="clearfix"> </div>
    </div>
</div>
        <!-- contact -->

@endsection
