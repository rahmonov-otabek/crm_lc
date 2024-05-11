@extends('layouts.admin')

@section('title')
    Students Edit
@endsection

@section('content')
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">O'quvchi ma'lumotlarini o'zgartirish</h3> 
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
                <form action="{{ route('admin.students.update', $student->id )}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-11">
                            <h5 class="form-title"><span>Asosiy qism</span></h5>
                        </div> 
                        <div class="col-1">
                            <a href="{{ route('admin.students.index') }}"><button type="button" class="btn btn-light">Ortga</button></a>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Ism <span class="login-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $student->name }}" name="name" placeholder="Ism kiriting" @error('name')  is-invalid @enderror/>
                                @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms"> 
                                <label>Rasm <span class="login-danger">*</span></label>
                                <input type="file" class="form-control" name="profile_pic" @error('profile_pic')  is-invalid @enderror/>
                                @error('profile_pic') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Jins <span class="login-danger">*</span></label>
                                <select class="form-control select" name="gender">
                                    @if ($student->gender=='Erkak')
                                        <option selected="selected">
                                            {{ $student->gender }} 
                                        </option>
                                        <option>Ayol</option>  
                                    @elseif ($student->gender=='Ayol')
                                    <option selected="selected">
                                        {{ $student->gender }} 
                                    </option>
                                    <option>Erkak</option>  
                                    @endif  
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date Of Birth
                                    <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" value="{{ $student->birthday }} " placeholder="DD-MM-YYYY" name="birthday" @error('birthday')  is-invalid @enderror/>
                                @error('birthday') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                        </div>  
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Balans <span class="login-danger">*</span></label>
                                <input type="text" class="form-control" name="cash" value="{{ $student->cash }} " placeholder="Balansni kiriting"  @error('cash')  is-invalid @enderror/>
                                @error('cash') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                        </div> 
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Manzil <span class="login-danger">*</span></label>
                                <input type="text" class="form-control" name="address" value="{{ $student->address }} " placeholder="Manzilni kiriting"  @error('address')  is-invalid @enderror/>
                                @error('address') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                        </div> 
                        <div class="col-12">
                            <h5 class="form-title"><span>Login ma'lumotlari</span></h5>
                        </div> 
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Telefon raqam <span class="login-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $student->phone_number }} " name="phone_number" placeholder="Telefon raqan kiriting" @error('phone_number')  is-invalid @enderror/>
                                @error('phone_number') <div class="invalid-feedback"> {{ $message }} </div> @enderror
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
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
