@extends('layouts.admin')

@section('title')
    Students Create
@endsection

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">O'quvchi qo'shish</h3> 
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
                    <form action="{{ route('admin.students.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                    <input type="text" class="form-control" name="name" placeholder="Ism kiriting" @error('name')  is-invalid @enderror/>
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
                                        <option>Erkak</option>
                                        <option>Ayol</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms calendar-icon">
                                    <label>Tug'ilgan kun
                                        <span class="login-danger">*</span></label>
                                    <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="birthday" @error('birthday')  is-invalid @enderror/>
                                    @error('birthday') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div>  
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Balans <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="cash" placeholder="Balansni kiriting"  @error('cash')  is-invalid @enderror/>
                                    @error('cash') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div> 
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Manzil <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" placeholder="Manzilni kiriting"  @error('address')  is-invalid @enderror/>
                                    @error('address') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div> 
                            <div class="col-12">
                                <h5 class="form-title"><span>Guruhga qo'shish</span></h5>
                              
                            </div> 
                              <select id="demo-multiple-select" multiple style="hight: 200px" name="groups[]">
                                @foreach ($groups as $group) 
                                    <option value="{{ $group->id }}">{{ $group->name }}</option> 
                                @endforeach
                              </select> 
                              <br>
                            <div class="col-12">
                                <h5 class="form-title"><span>Login ma'lumotlari</span></h5>
                            </div> 
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Telefon raqam <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone_number" placeholder="Telefon raqan kiriting" @error('phone_number')  is-invalid @enderror/>
                                    @error('phone_number') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Parol <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="password" placeholder="Parol kiriting" @error('password')  is-invalid @enderror/>
                                    @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Parolni takrorlash
                                        <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="password_confirmation" placeholder="Parolni takrorlang" />
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
    <style>
        #demo-multiple-select {
            height: 200px;
            width: 100%; /* Bo'yining to'liq ekran eni bo'lsa qulaylikdir */
            padding: 5px; /* Tanlash maydonining eng pastki ko'rinishi */
            border-radius: 5px; /* To'g'ri burchaklarni engil tizmalar */
            border: 1px solid #ced4da; /* Boridan qurilgan cho'qqisi */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Uchdan oshmasdan pastki ko'rinishi */
            margin-bottom: 20px;
            }
    </style>
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
    <script>
        $('#multiple-select').mobiscroll().select({
            inputElement: document.getElementById('my-input'),
            touchUi: false
        });
    </script>
@endsection
