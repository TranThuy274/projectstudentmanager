@extends('sbadmins.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>Sửa sinh viên</h1>
        </div>

        <div class="row">
            <form name="create" method="post" action="{{ url("/students/$student->id") }}">
                @csrf
                <input type="hidden" name="id" value="{{ $student->id }}">
                <div class="form-group">
                    <label>Tên sinh viên</label>
                    <input type="text" name="student_name" class="form-control" value="{{ $student->student_name }}">
                </div>

                <div class="form-group">
                    <label>Nơi sinh</label>
                    <input type="text" name="student_name" class="form-control" value="{{ $student->student_location }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
