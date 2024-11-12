<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/monster-admin/HTML/assets/images/favicon.png">
    <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="/monster-admin/HTML/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="/monster-admin/HTML/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/monster-admin/HTML/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="/monster-admin/HTML/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="/monster-admin/HTML/assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="/monster-admin/HTML/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Calendar CSS -->
    <link href="/monster-admin/HTML/assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="/monster-admin/HTML/horizontal/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/monster-admin/HTML/horizontal/css/colors/green.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('layouts.dashboard.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layouts.dashboard.sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('layouts.dashboard.footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/monster-admin/HTML/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/monster-admin/HTML/assets/plugins/bootstrap/js/tether.min.js"></script>
<script src="/monster-admin/HTML/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/monster-admin/HTML/horizontal/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/monster-admin/HTML/horizontal/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/monster-admin/HTML/horizontal/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/monster-admin/HTML/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="/monster-admin/HTML/horizontal/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="/monster-admin/HTML/assets/plugins/chartist-js/dist/chartist.min.js"></script>
<script src="/monster-admin/HTML/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<script src="/monster-admin/HTML/assets/plugins/echarts/echarts-all.js"></script>
<!-- Vector map JavaScript -->
<script src="/monster-admin/HTML/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/monster-admin/HTML/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Calendar JavaScript -->
<script src="/monster-admin/HTML/assets/plugins/moment/moment.js"></script>
<script src='/monster-admin/HTML/assets/plugins/calendar/dist/fullcalendar.min.js'></script>
<script src="/monster-admin/HTML/assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
<script src="/monster-admin/HTML/assets/plugins/calendar/dist/cal-init.js"></script>
<!-- sparkline chart -->
<script src="/monster-admin/HTML/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="/monster-admin/HTML/horizontal/js/dashboard4.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="/monster-admin/HTML/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
