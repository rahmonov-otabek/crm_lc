@extends('layouts.admin')

@section('title')
    Groups Create
@endsection

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Guruh qo'shish</h3> 
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
                    <form action="{{ route('admin.groups.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-11">
                                <h5 class="form-title"><span>Asosiy qism</span></h5>
                            </div> 
                            <div class="col-1">
                                <a href="{{ route('admin.groups.index') }}"><button type="button" class="btn btn-light">Ortga</button></a>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Nom <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Nom kiriting" @error('name')  is-invalid @enderror/>
                                    @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div> 
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Kurs <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="course_id">
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->name }} ({{ $course->department->name }})</option> 
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Ustoz <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="teacher_id">
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option> 
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Xona <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="room_id">
                                        @foreach ($rooms as $room)
                                            <option value="{{ $room->id }}">{{ $room->name }}</option> 
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Boshlanish vaqti <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="start_time" placeholder="Boshlanish vaqtini kiriting (08:00)"  @error('start_time')  is-invalid @enderror/>
                                    @error('start_time') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div> 
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Tugash vaqti <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="end_time" placeholder="Tugash vaqtini kiriting (10:00)"  @error('end_time')  is-invalid @enderror/>
                                    @error('end_time') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div> 
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Boshlanish sanasi <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="start_date" placeholder="Boshlanish sanasini kiriting (2024-05-01)"  @error('start_date')  is-invalid @enderror/>
                                    @error('start_date') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div> 
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Tugash sanasi <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="end_date" placeholder="Tugash sanasini kiriting (2024-09-01)"  @error('end_date')  is-invalid @enderror/>
                                    @error('end_date') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">  
                                <label>Hafta kunlari <span class="login-danger">*</span></label>
                                <br>
                                @foreach ($week_days as $week_day)
                                    <input type="checkbox" style="margin-left: 10px" id="{{ $week_day->name }}" name="week_days[]" value="{{ $week_day->id }}"> 
                                    <label for="{{ $week_day->name }}"  >{{ $week_day->name }}</label>
                                @endforeach 
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
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
