<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <link rel="shortcut icon" href="{{{ URL::to('assets/img/favicon.ico') }}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::to('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::to('assets/css/nprogress.css') }}" rel="stylesheet">

    <!-- FullCalendar -->
    <link href="{{ URL::to('assets/css/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/fullcalendar.print.css') }}" rel="stylesheet" media="print">
    <!-- iCheck -->
    <link href="{{ URL::to('assets/css/green.css') }}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{ URL::to('assets/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet"/>

    <!-- USE IN FORM -->
    <!-- bootstrap-wysiwyg -->
    <link href="{{ URL::to('assets/css/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ URL::to('assets/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ URL::to('assets/css/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ URL::to('assets/css/starrr.css') }}" rel="stylesheet">

    <!-- Ion.RangeSlider -->
    <link href="{{ URL::to('assets/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="{{ URL::to('assets/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">

    <link href="{{ URL::to('assets/css/cropper.min.css') }}" rel="stylesheet">

    <!-- Dropzone.js -->
    <link href="{{ URL::to('assets/css/dropzone.min.css') }}" rel="stylesheet">
    <!-- USE IN FORM -->

    <!-- bootstrap-progressbar -->
    <link href="{{ URL::to('assets/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{ URL::to('assets/css/pnotify.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/pnotify.nonblock.css') }}" rel="stylesheet">

    <!-- JQVMap -->
    <link href="{{ URL::to('assets/css/jqvmap.min.css') }}" rel="stylesheet"/>

    <!-- Animate.css
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css') }}" rel="stylesheet">
    -->

    <!-- Datatables -->
    <link href="{{ URL::to('assets/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ URL::to('assets/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ URL::to('') }}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            @include('template.profile_menu')

            <br />

            @include('template.sidebar')

            @include('template.menu_footer')
          </div>
        </div>

        @include('template.navigation')

        @yield('content')

        @include('template.footer')

      </div><!--/.main_container-->
    </div><!--/.container /.body-->

    <!-- jQuery -->
    <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::to('assets/js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ URL::to('assets/js/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ URL::to('assets/js/custom.min.js') }}"></script>

    @yield('content_script')
  </body>
</html>
