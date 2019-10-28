@extends('sbadmins.layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Quản lý sinh viên</h1>
    </div>

    <div class="row" style="margin-left: 10px">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Tên sinh viên</td>
                    <td>Điểm số</td>
                    <td>Xếp loại</td>
                    <td>Hành động</td>
                </tr>
            </thead>

            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->student_score }}</td>
                    <td>{{ $student->student_core }}</td>
                    <td>
                        <a href="{{ url("/student/$student->id/edit") }}" class="btn btn-warning">Sửa</a>
                        <a href="{{ url("/student/$student->id/edit") }}" class="btn btn-warning">Xóa</a>
                    </td>
            @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
