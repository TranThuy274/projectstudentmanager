@extends('sbadmins.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>Thêm sinh viên</h1>
        </div>

        <div class="row">
            <form name="create" method="post" action="{{ url("/students") }}">
                @csrf
                <div class="form-group">
                    <label>Tên sinh viên</label>
                    <input type="text" name="student_name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nơi sinh</label>
                    <input type="text" name="student_name" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
