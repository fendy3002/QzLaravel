<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@section('title')
        Coders Colony
    @show</title>

    <link rel="stylesheet" href="{!! asset("/") !!}bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset("/") !!}css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset("/") !!}css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! asset("/") !!}css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{!! asset("/") !!}css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! asset("/") !!}plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{!! asset("/") !!}plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{!! asset("/") !!}plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{!! asset("/") !!}plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!! asset("/") !!}plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{!! asset("/") !!}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- qzjs css -->
    <link rel="stylesheet" href="{!! asset("/") !!}css/qzjs/qzjs.css">

    <!-- main -->
    <link rel="stylesheet" href="{!! asset("/") !!}css/app/main.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @section('header')
    @show

    @section('css')
    @show
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="margin-left:0px;">
          @section('content')
          @show
      </div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{!! asset("/") !!}plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{!! asset("/") !!}plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{!! asset("/") !!}bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="{!! asset("/") !!}plugins/raphael/raphael-min.js"></script>
    <script src="{!! asset("/") !!}plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="{!! asset("/") !!}plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{!! asset("/") !!}plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{!! asset("/") !!}plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{!! asset("/") !!}plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="{!! asset("/") !!}plugins/moment/moment.min.js"></script>
    <script src="{!! asset("/") !!}plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{!! asset("/") !!}plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{!! asset("/") !!}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="{!! asset("/") !!}plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{!! asset("/") !!}plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{!! asset("/") !!}js/app.min.js"></script>

    <!-- knockoutjs -->
    <script src="{!! asset("/") !!}plugins/knockout/knockout-3.1.0.js"></script>
    <!-- mousetrap -->
    <script src="{!! asset("/") !!}plugins/mousetrap/mousetrap.min.js"></script>

    <!-- QzJs -->
    <script src="{!! asset("/") !!}js/qzjs/core.js"></script>
  	<script src="{!! asset("/") !!}js/qzjs/format.js"></script>
  	<script src="{!! asset("/") !!}js/qzjs/web.js"></script>
  	<script src="{!! asset("/") !!}js/qzjs/ko-header-detail.js"></script>
    <script src="{!! asset("/") !!}js/qzjs/numeric.js"></script>
    <script src="{!! asset("/") !!}js/qzjs/config.js"></script>

    <!-- QzJs AdminLTE plugin -->
    <script src="{!! asset("/") !!}js/qzjs/plugins/adminlte.js"></script>

    <script>
        Qz.Commands.add({
            '/home' : function() { window.location = "{!! url('/') !!}"; }
        });
    </script>
    @section('scripts')
    @show
</body>

</html>
