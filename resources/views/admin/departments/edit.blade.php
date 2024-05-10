@extends('layouts.admin')

@section('title')
    Departments update
@endsection

@section('content') 
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Bo'limni o'zgartirish</h3> 
        </div>
    </div>
</div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.departments.update', $department->id )}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-11">
                            <h5 class="form-title"><span>Asosiy qism</span></h5>
                        </div> 
                        <div class="col-1">
                            <a href="{{ route('admin.departments.index') }}"><button type="button" class="btn btn-light">Ortga</button></a>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Nom <span class="login-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $department->name }}" name="name" placeholder="Nom kiriting" @error('name')  is-invalid @enderror/>
                                @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                        </div>    
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">
                                    Yuborish
                                </button>
                            </div>
                        </div>
                    </div>
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

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('js') 
<script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('assets/js/feather.min.js')}}"></script>

<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{ asset('assets/plugins/datatables/datatables.min.js')}}"></script>

<script src="{{ asset('assets/js/script.js')}}"></script>
@endsection