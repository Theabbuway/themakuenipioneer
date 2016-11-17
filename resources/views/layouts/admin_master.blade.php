<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>Dashboard - Metro King</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <!-- Stylesheets -->
    <link href="/style/bootstrap.css" rel="stylesheet">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="/style/font-awesome.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="/style/jquery-ui.css">
    <!-- Calendar -->
    <link rel="stylesheet" href="/style/fullcalendar.css">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="/style/prettyPhoto.css">
    <!-- Star rating -->
    <link rel="stylesheet" href="/style/rateit.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="/style/bootstrap-datetimepicker.min.css">
    <!-- jQuery Gritter -->
    <link rel="stylesheet" href="/style/jquery.gritter.css">
    <!-- CLEditor -->
    <link rel="stylesheet" href="/style/jquery.cleditor.css">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" href="/style/bootstrap-switch.css">
    <!-- Main stylesheet -->
    <link href="/style/style.css" rel="stylesheet">
    <!-- Widgets stylesheet -->
    <link href="/style/widgets.css" rel="stylesheet">



    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="/js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">

    <div class="containerk">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">Metro <span class="bold">King</span></a>
        </div>
        <!-- Site name for smallar screens -->


        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">



            <!-- Links -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img src="img/user.jpg" alt="" class="nav-user-pic img-responsive" /> Admin <b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
                        <li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>

            <!-- Notifications -->
            <ul class="nav navbar-nav navbar-right">

                <!-- Comment button with number of latest comments count -->
                <li class="dropdown dropdown-big">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="icon-comments"></i> Chats <span   class="badge badge-info">6</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <!-- Heading - h5 -->
                            <h5><i class="icon-comments"></i> Chats</h5>
                            <!-- Use hr tag to add border -->
                            <hr />
                        </li>
                        <li>
                            <!-- List item heading h6 -->
                            <a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span>
                            <div class="clearfix"></div>
                            <hr />
                        </li>
                        <li>
                            <a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span>
                            <div class="clearfix"></div>
                            <hr />
                        </li>
                        <li>
                            <a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span>
                            <div class="clearfix"></div>
                            <hr />
                        </li>
                        <li>
                            <div class="drop-foot">
                                <a href="#">View All</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Message button with number of latest messages count-->
                <li class="dropdown dropdown-big">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="icon-envelope-alt"></i> Inbox <span class="badge badge-important">6</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <!-- Heading - h5 -->
                            <h5><i class="icon-envelope-alt"></i> Messages</h5>
                            <!-- Use hr tag to add border -->
                            <hr />
                        </li>
                        <li>
                            <!-- List item heading h6 -->
                            <a href="#">Hello how are you?</a>
                            <!-- List item para -->
                            <p>Quisque eu consectetur erat eget  semper...</p>
                            <hr />
                        </li>
                        <li>
                            <a href="#">Today is wonderful?</a>
                            <p>Quisque eu consectetur erat eget  semper...</p>
                            <hr />
                        </li>
                        <li>
                            <div class="drop-foot">
                                <a href="#">View All</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Members button with number of latest members count -->
                <li class="dropdown dropdown-big">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="icon-user"></i> Users <span   class="badge badge-success">6</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <!-- Heading - h5 -->
                            <h5><i class="icon-user"></i> Users</h5>
                            <!-- Use hr tag to add border -->
                            <hr />
                        </li>
                        <li>
                            <!-- List item heading h6-->
                            <a href="#">Ravi Kumar</a> <span class="label label-warning pull-right">Free</span>
                            <div class="clearfix"></div>
                            <hr />
                        </li>
                        <li>
                            <a href="#">Balaji</a> <span class="label label-important pull-right">Premium</span>
                            <div class="clearfix"></div>
                            <hr />
                        </li>
                        <li>
                            <a href="#">Kumarasamy</a> <span class="label label-warning pull-right">Free</span>
                            <div class="clearfix"></div>
                            <hr />
                        </li>
                        <li>
                            <div class="drop-foot">
                                <a href="#">View All</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</div>




<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <div class="sidebar-inner">



            <!-- Search form -->
            <div class="sidebar-widget">
                <form >
                    <input type="text" class="form-control" placeholder="Search">
                </form>
            </div>

            <!--- Sidebar navigation -->
            <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
            <ul class="navi">

                <!-- Use the class nred, ngreen, nblue, nlightblue, nviolet or norange to add background color. You need to use this in <li> tag. -->

                <li class="nred current"><a href="/"><i class="icon-desktop"></i> Main Site</a></li>

                <!-- Menu with sub menu -->

                <li class="ngreen"><a href="/articles"><i class="icon-book"></i> Articles</a></li>

                <li class="norange"><a href="/image"><i class="icon-picture"></i> Images</a></li>

                <li class="nblue"><a href="/contacts"><i class="icon-bell"></i> Contacts</a></li>

            </ul>




            <!-- Date -->

            <div class="sidebar-widget">
                <div id="todaydate"></div>
            </div>



        </div>

    </div>

    <!-- Sidebar ends -->

    <!-- Main bar -->
    <div class="mainbar">

        <!-- Page heading -->
        <div class="page-head">
            <!-- Page heading -->
            <h2 class="pull-left">Dashboard
                <!-- page meta -->
                <span class="page-meta">Something Goes Here</span>
            </h2>


            <!-- Breadcrumb -->
            <div class="bread-crumb pull-right">
                <a href="/"><i class="icon-home"></i> Home</a>
                <!-- Divider -->
                <span class="divider">/</span>
                <a href="/admin" class="bread-current">Dashboard</a>
            </div>

            <div class="clearfix"></div>

        </div>
        <!-- Page heading ends -->



        <!-- Matter -->
            @yield('content')
        <!-- Matter ends -->
    </div>

    <!-- Mainbar ends -->
    <div class="clearfix"></div>

</div>
<!-- Content ends -->


<!-- Notification box starts -->
<div class="slide-box">

    <!-- Notification box head -->
    <div class="slide-box-head bred">
        <!-- Title -->
        <div class="pull-left">Notification Box</div>
        <!-- Icon -->
        <div class="slide-icons pull-right">
            <a href="#" class="sminimize"><i class="icon-chevron-down"></i></a>
            <a href="#" class="sclose"><i class="icon-remove"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="slide-content">

        <!-- It is default bootstrap nav tabs. See official bootstrap doc for doubts -->
        <ul class="nav nav-tabs">
            <!-- Tab links -->
            <li class="active"><a href="#tab1" data-toggle="tab"><i class="icon-bar-chart"></i></a></li>
            <li><a href="#tab2" data-toggle="tab"><i class="icon-phone"></i></a></li>
            <li><a href="#tab3" data-toggle="tab"><i class="icon-comments"></i></a></li>
        </ul>

        <!-- Tab content -->

        <div class="tab-content">

            <div class="tab-pane active" id="tab1">

                <!-- Graph #1 -->
                <div class="slide-data">
                    <div class="slide-data-text">Today Earnings</div>
                    <div class="slide-data-result">$5,0000 <i class="icon-arrow-up red"></i> </div>
                    <div class="clearfix"></div>
                    <hr />
                    <span id="todayspark4" class="spark"></span>
                </div>

                <!-- Graph #2 -->
                <div class="slide-data">
                    <div class="slide-data-text">Yesterday Earnings</div>
                    <div class="slide-data-result">$4,6000 <i class="icon-arrow-down green"></i> </div>
                    <div class="clearfix"></div>
                    <hr />
                    <span id="todayspark5" class="spark"></span>
                </div>

            </div>

            <div class="tab-pane" id="tab2">
                <h5>Have some content here.</h5>
                <p>Aliquam dui libero, pharetra nec venenatis in, scelerisque quis odio. In hac habitasse platea dictumst. Etiam porta placerat turpis, eget fermentum neque egestas at. Vestibulum ullamcorper, augue a sollicitudin vestibulum, orci purus semper felis, lobortis consequat nisi nunc eu enim. </p>
            </div>

            <div class="tab-pane" id="tab3">
                <h5>Have some content here.</h5>
                <p>Aliquam dui libero, pharetra nec venenatis in, scelerisque quis odio. In hac habitasse platea dictumst. Etiam porta placerat turpis, eget fermentum neque egestas at. Vestibulum ullamcorper, augue a sollicitudin vestibulum, orci purus semper felis, lobortis consequat nisi nunc eu enim.</p>
            </div>

        </div>

    </div>

</div>

<!-- Notification box ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

<!-- JS -->
<script src="/js/jquery.js"></script> <!-- jQuery -->
<script src="/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="/js/jquery-ui-1.10.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src="/js/excanvas.min.js"></script>
<script src="/js/jquery.flot.js"></script>
<script src="/js/jquery.flot.resize.js"></script>
<script src="/js/jquery.flot.pie.js"></script>
<script src="/js/jquery.flot.stack.js"></script>

<script src="/js/jquery.gritter.min.js"></script> <!-- jQuery Gritter -->
<script src="/js/sparklines.js"></script> <!-- Sparklines -->
<script src="/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="/js/filter.js"></script> <!-- Filter for support page -->
<script src="/js/custom.js"></script> <!-- Custom codes -->
<script src="/js/charts.js"></script> <!-- Custom chart codes -->

<!-- Script for this page -->
<script type="text/javascript">
    $(function () {

        /* Bar Chart starts */

        var d1 = [];
        for (var i = 0; i <= 30; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);

        var d2 = [];
        for (var i = 0; i <= 30; i += 1)
            d2.push([i, parseInt(Math.random() * 30)]);


        var stack = 0, bars = true, lines = false, steps = false;

        function plotWithOptions() {
            $.plot($("#bar-chart"), [ d1, d2 ], {
                series: {
                    stack: stack,
                    lines: { show: lines, fill: true, steps: steps },
                    bars: { show: bars, barWidth: 0.8 }
                },
                grid: {
                    borderWidth: 0, hoverable: true, color: "#777"
                },
                colors: ["#52b9e9", "#0aa4eb"],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
                }
            });
        }

        plotWithOptions();

        $(".stackControls input").click(function (e) {
            e.preventDefault();
            stack = $(this).val() == "With stacking" ? true : null;
            plotWithOptions();
        });
        $(".graphControls input").click(function (e) {
            e.preventDefault();
            bars = $(this).val().indexOf("Bars") != -1;
            lines = $(this).val().indexOf("Lines") != -1;
            steps = $(this).val().indexOf("steps") != -1;
            plotWithOptions();
        });

        /* Bar chart ends */

    });


    /* Curve chart starts */

    $(function () {
        var sin = [], cos = [];
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }

        var plot = $.plot($("#curve-chart"),
                [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
                    series: {
                        lines: { show: true,
                            fill: true,
                            fillColor: {
                                colors: [{
                                    opacity: 0.05
                                }, {
                                    opacity: 0.01
                                }]
                            }
                        },
                        points: { show: true }
                    },
                    grid: { hoverable: true, clickable: true, borderWidth:0 },
                    yaxis: { min: -1.2, max: 1.2 },
                    colors: ["#fa3031", "#43c83c"]
                });


        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y + 5,
                width: 100,
                left: x + 5,
                border: '1px solid #000',
                padding: '2px 8px',
                color: '#ccc',
                'background-color': '#000',
                opacity: 0.9
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        $("#curve-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

        $("#curve-chart").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });

    });

    /* Curve chart ends */
</script>

</body>
</html>