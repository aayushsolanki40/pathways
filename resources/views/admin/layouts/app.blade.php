<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{env('APP_NAME')}} - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('adminAssets/res/applogo.png')}}">
    <!-- Bootstrap -->
    <link href="{{asset('adminAssets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('adminAssets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('adminAssets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('adminAssets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('adminAssets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('adminAssets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('adminAssets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('adminAssets/build/css/custom.min.css')}}" rel="stylesheet">

    <!-- Switchery -->
    <link href="{{asset('adminAssets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('adminAssets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminAssets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminAssets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminAssets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminAssets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Editor -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


    <link href="{{asset('adminAssets/res/app.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><img id="adminlogo" src="{{asset('adminAssets/res/applogo.png')}}"> <span>{{config('app.name')}}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{auth()->user()->profile_img}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            @include('/admin/components/sidebar')

            <!-- /menu footer buttons -->
            <!--<div class="sidebar-footer hidden-small">-->
            <!--  <a data-toggle="tooltip" data-placement="top" title="Settings">-->
            <!--    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>-->
            <!--  </a>-->
            <!--  <a data-toggle="tooltip" data-placement="top" title="FullScreen">-->
            <!--    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>-->
            <!--  </a>-->
            <!--  <a data-toggle="tooltip" data-placement="top" title="Lock">-->
            <!--    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>-->
            <!--  </a>-->
            <!--  <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('admin.logout')}}">-->
            <!--    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>-->
            <!--  </a>-->
            <!--</div>-->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{auth()->user()->profile_img}}" alt="">{{auth()->user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('admin.profile')}}"> Profile</a></li>
                    <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <!-- /top tiles -->
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            {{config('app.name')}} - Admin
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('adminAssets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('adminAssets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('adminAssets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('adminAssets/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('adminAssets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('adminAssets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('adminAssets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('adminAssets/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('adminAssets/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('adminAssets/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('adminAssets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('adminAssets/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('adminAssets/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('adminAssets/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('adminAssets/build/js/custom.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('adminAssets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <!-- Switchery -->
    <script src="{{asset('adminAssets/vendors/switchery/dist/switchery.min.js')}}"></script>

        <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
      var quill = new Quill('#editor', {
        theme: 'snow'
      });
    </script>
    @yield('scripts')
	<script src="{{asset('adminAssets/res/app.js')}}"></script>
  </body>
</html>
