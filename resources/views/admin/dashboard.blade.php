@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Welcome Admin!</h3> 
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>O'quvchilar</h6>
                            <h3>{{ $students }}</h3>
                        </div>
                        <div class="db-icon">
                            <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>Ustozlar</h6>
                            <h3>{{ $teachers }}</h3>
                        </div>
                        <div class="db-icon">
                            <img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>Bo'limlar</h6>
                            <h3>{{ $departments }}</h3>
                        </div>
                        <div class="db-icon">
                            <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    {{-- <div class="row">
        <div class="col-md-12 col-lg-6">

            <div class="card card-chart">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title">Overview</h5>
                        </div>
                        <div class="col-6">
                            <ul class="chart-list-out">
                                <li><span class="circle-blue"></span>Teacher</li>
                                <li><span class="circle-green"></span>Student</li>
                                <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apexcharts-area"></div>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-6">

            <div class="card card-chart">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title">Number of Students</h5>
                        </div>
                        <div class="col-6">
                            <ul class="chart-list-out">
                                <li><span class="circle-blue"></span>Girls</li>
                                <li><span class="circle-green"></span>Boys</li>
                                <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="bar"></div>
                </div>
            </div>

        </div>
    </div>  --}}
@endsection 

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.cs')}}s">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
@endsection

@section('js')
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/feather.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
@endsection