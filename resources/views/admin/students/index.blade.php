@extends('layouts.admin')

@section('title')
    Students list
@endsection

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">O'quvchilar</h3>
            </div>
        </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible show fade col-lg-4">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>x</span>
        </button>
         {{session('success')}}
      </div> 
    </div> 
    @endif 
    <div class="student-group-form">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Id bo'yicha qidiruv ..." />
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ism bo'yicha qidiruv ..." />
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Telefon raqam bo'yicha qidiruv ..." />
                </div>
            </div>
            <div class="col-lg-2">
                <div class="search-student-btn">
                    <button type="btn" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">O'quvchilar</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="{{ route('get_students') }}" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                    Yuklab olish</a>
                                <a href="{{ route('admin.students.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>ID</th>
                                    <th>Ism</th>
                                    <th>Jins</th>
                                    <th>Telefon raqam</th> 
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ route('admin.students.show', $student->id) }}" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src=@php echo $student->profile_pic ?  
                                                        "/uploads/images/students/$student->profile_pic" :
                                                        "/assets/img/not_found_user.jpg" @endphp /></a>
                                                <a href="{{ route('admin.students.show', $student->id) }}">{{ $student->name }}</a>
                                            </h2>
                                        </td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->phone_number }}</td> 
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="{{ route('admin.students.show', $student->id) }}" class="btn btn-sm bg-success-light me-2">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }} " />

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
@endsection

@section('js')
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
