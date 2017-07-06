<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to KIMIA Proficiency Testing Online System- Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-responsive1.css') }}" rel="stylesheet">
  <link href="{{ asset('css/admin3-responsive.css') }}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="admin-pages">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-left top-nav">
                <div class="input-group custom-search-form">
                    <input class="form-control" placeholder="Search..." type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="icon-admin-ptos icon-search"></i>
                        </button>
                    </span>
                </div>
            </ul>   
            <ul class="nav navbar-right top-nav">
                <!-- <li class="top-left">
                    <span class="icon-admin-ptos icon-profile"></span>
                    <span>Hello,</span>
                    <span class="text-name">Hayat :-)</span>
                </li>
                <li class="top-right">
                    <span class="message-wrapper"><span class="icon-admin-ptos icon-message"></span><span class="message-noti">12</span></span>
                    <span class="icon-admin-ptos icon-troly"></span>
                    <span class="icon-admin-ptos icon-setting"></span>
                    <span class="icon-admin-ptos icon-book"></span>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a class="navbar-brand" href="index.html"><img src="images/ptos-admin-logo.png"></a></li>
                    <li class="active">
                        <a href="index.html"><span class="icon-admin-nav icon-dashboard"> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><span class="icon-admin-nav icon-scheme"> Proficiency Scheme</a>
                    </li>
                    <li>
                        <a href="#"><span class="icon-admin-nav icon-mylab"> My Lab</a>
                    </li>
                    <li>
                        <a href="#"><span class="icon-admin-nav icon-details"> Test Details</a>
                    </li>
                    <li>
                        <a href="#"><span class="icon-admin-nav icon-payment"> Payment</a>
                    </li>
                    <li>
                        <a href="#"><span class="icon-admin-nav icon-report"> Report</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#demo"><span class="icon-admin-nav icon-administration">Administration <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse {{Request::segment(1) == 'user' || Request::segment(1) == 'role' || Request::segment(1) == 'permission' ? 'in' : ''}}">
                            <li class="{{Request::segment(1) == 'user' ? 'active' : ''}}"><a href="{{ URL::to('/user')}}"> User Listing </a></li> 
                            <li class="{{Request::segment(1) == 'role' ? 'active' : ''}}"><a href="{{ URL::to('/role')}}"> Role Listing </a></li> 
                            <li class="{{Request::segment(1) == 'permission' ? 'active' : ''}}"><a href="{{ URL::to('/permission')}}"> Permission Listing </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="myModal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div id="modal-lg-content"></div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div id="modal-content"></div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
              
              <!-- footer -->
                <div id="footer" class="col-lg-12">
                    <div class="col-sm-9">Copyright ©2017. Proficiency Testing Online System.</div>
                    <div class="col-sm-3 text-right">Version 1.0</div>
                </div>
            </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/chartist.min.js') }}"></script>
    <script src="{{ asset('js/chartist-plugin-axistitle.js') }}"></script>
    <script src="{{ asset('js/mychart.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
            function dataModalLg(url)
            {   
                $("#modal-lg-content").html( "" );
                $.ajax({
                     type: "GET",
                     url: url,
                     cache: false,
                     success: function(html) {
                     $("#modal-lg-content").html( html );
                     }
                });
            }
            function dataModal(url)
            {   
                $("#modal-content").html( "" );
                $.ajax({
                     type: "GET",
                     url: url,
                     cache: false,
                     success: function(html) {
                     $("#modal-content").html( html );
                     }
                });
            }
            // $(".date").datetimepicker({format: "DD-MM-YYYY"});
            // $(".select2").select2();
        </script>
        @stack('scripts')

</body>
</html>
