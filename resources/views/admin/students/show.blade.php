@extends('layouts.admin')

@section('title')
    Students Detail
@endsection

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">O'quvchining ma'lumotlari</h3> 
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-11">
                    <div class="about-info">
                        <h4>
                            ID - {{ $student->id }} 
                        </h4>
                    </div> 
                </div>
                <div class="col-md-1">
                    <a href="{{ route('admin.students.index') }}"><button type="button" class="btn btn-light">Ortga</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="student-personals-grp">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-detail">
                                    <h4>Shaxsiy ma'lumotlar</h4>
                                </div>
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-user"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Ism</h4>
                                        <h5>{{ $student->name }} </h5>
                                    </div>
                                </div> 
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-phone-call"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Telefon raqam</h4>
                                        <h5>{{ $student->phone_number }} </h5>
                                    </div>
                                </div> 
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-user"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Jins</h4>
                                        <h5>{{ $student->gender }} </h5>
                                    </div>
                                </div>
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-calendar"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Tug'ilgan kuni</h4>
                                        <h5>{{ $student->birthday }} </h5>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
            <div class="row">
                <div class="col-11"> 
                </div>
                <div class="col-1">
                    <form method="POST" action="{{ route('admin.students.destroy', $student->id) }}" onclick="return confirm('O`chirishni xohlaysimi?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">O'chirish</button>
                    </form> 
                </div>
            </div>

            
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('js')
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
