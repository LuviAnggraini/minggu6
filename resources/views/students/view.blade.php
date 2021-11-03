@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('STUDENT DATA') }}</div>
            <div class="card-header">{{ __('STUDENT DATA ')  }} {{ $student->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/students/{{$student->id}}" method="post">
                        {{csrf_field()}}
                        @method('PUT')

                        <table class="table table-responsive">
                        <tr><th>ID</th><th>:</th><td>{{ $student->id}}</td></tr>
                        <tr><th>NIM</th><th>:</th><td>{{$student->nim}}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{$student->name}}</td></tr>
                        <tr><th>Class</th><th>:</th><td>{{$student->class}}</td></tr>
                        <tr><th>Department</th><th>:</th><td>{{$student->department}}</td></tr>
                        <tr><th>Phone Number</th><th>:</th><td>{{$student->phone_number}}</td></tr>
                        </table>

                        <a href="/students" class="btn btn-warning">back to CRUD</a>
                        <form>
                        <input type="hidden" name="id" value="{{$student->id}}"></br>
                        <div class="form-group">
                            <label for="nim">ID</label>
                            <input type="text" class="form-control" required="required" name="id" value="{{$student->id}}" readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" required="required" name="nim" value="{{$student->nim}}" readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" required="required" name="name" value="{{$student->name}}" readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" class="form-control" required="required" name="class" value="{{ $student->kelas->class_name }}" readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" class="form-control" required="required" name="department" value="{{$student->department}}"readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" required="required" name="phone_number" value="{{$student->phone_number}}"readonly></br>
                        </div>
                        <a href='/students' class="btn btn-dark">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 