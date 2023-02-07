<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@extends("layouts.master")

@section("title","Inserción de Estudiantes")

@section("header","Inserción de Estudiantes")

@section("content")
        <form action="{{ route('student.update', ['student' => $student->id])}}" method="POST">
        @method("PATCH")
        @csrf
        <div class="d-flex justify-content-center">
            <div  class="w-50 m-3">
                <div class="input-group mb-3">
                    Name:<input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="{{ $student->name ?? '' }}">
                </div>
                <div class="input-group mb-3 ">
                    Surname:<input type="text" class="form-control" aria-describedby="basic-addon1" name="surname" value="{{ $student->surname ?? '' }}">
                </div>
                <div class="input-group mb-3 ">
                    Sex:<input type="text" class="form-control" aria-describedby="basic-addon1" name="sex" value="{{ $student->sex ?? '' }}">
                </div>
                <div class="input-group mb-3 ">
                    Age:<input type="text" class="form-control" aria-describedby="basic-addon1" name="age" value="{{ $student->age ?? '' }}">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Send" class="btn btn-success m-3">
        </div>
        </form>
@endsection
</body>
</html>