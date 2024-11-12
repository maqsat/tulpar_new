@extends('layouts.dashboard.template')

@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Главная</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
            <div class="dropdown pull-right m-r-10 hidden-sm-down">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    January 2017
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">February 2017</a>
                    <a class="dropdown-item" href="#">March 2017</a>
                    <a class="dropdown-item" href="#">April 2017</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-8"><span class="display-6">2376 <i class="ti-angle-down font-14 text-danger"></i></span>
                            <h6>Total Visits</h6></div>
                        <div class="col-4 align-self-center text-right  p-l-0">
                            <div id="sparklinedash3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-8"><span class="display-6">3670 <i class="ti-angle-up font-14 text-success"></i></span>
                            <h6>Page Views</h6></div>
                        <div class="col-4 align-self-center text-right p-l-0">
                            <div id="sparklinedash"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-8"><span class="display-6">1562 <i class="ti-angle-up font-14 text-success"></i></span>
                            <h6>Unique Visits</h6></div>
                        <div class="col-4 align-self-center text-right p-l-0">
                            <div id="sparklinedash2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-8"><span class="display-6">35% <i class="ti-angle-down font-14 text-danger"></i></span>
                            <h6>Bounce Rate</h6></div>
                        <div class="col-4 align-self-center text-right p-l-0">
                            <div id="sparklinedash4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
</div>

@endsection
