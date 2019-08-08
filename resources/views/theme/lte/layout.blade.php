<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Boxed Layout</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script type="text/javascript"
        src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8">
    </script>
</head>

<body class="hold-transition skin-blue layout-boxed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Inicio del header -->
        @include("theme/$theme/header")
        <!-- Fin header -->
        <!-- Inicico Aside-->
        @include("theme/$theme/aside")
        <!-- Fin Aside -->
        <div class="content-wrapper">
            <!-- aqui va el header d ela pagiuna -->
            <section class="content-header">
                <h1>
                    Boxed Layout
                    <small>Blank example to the boxed layout</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Layout</a></li>
                    <li class="active">Boxed</li>
                </ol>
            </section>
            <section class="content">
                <!-- aqui se usa para lo smensaje al usaurio d el apgina -->
                <div class="callout callout-info">
                    <h4>Tip!</h4>

                    <p>Add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when
                        working on
                        large screens because it prevents the site from stretching very wide.</p>
                </div>
                <!-- Default box aqui va el titulo de la pagina -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Titutlo Pagina</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- aui va elconteido en si de la pagina. aplciaion  tabal, etc. -->
                    <div class="box-body">
                        Start creating your amazing application!
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Footer
                    </div>
                    <!-- /.box-footer-->
                </div>
            </section>
            
        </div>
        <!-- Content Header (Page header) -->
        @include("theme/$theme/footer")

    </div>
    <!-- jQuery 3 -->
    <script src="{{ asset("assets/$theme/bower_components/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
    <!-- FastClick -->
    <script src="{{ asset("assets/$theme/bower_components/fastclick/lib/fastclick.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("assets/$theme/dist/js/adminlte.min.js") }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset("assets/$theme/dist/js/demo.js") }}"></script>
</body>

</html>