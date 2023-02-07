<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@extends("layouts.master")

@section("title","Inserción de Asignaturas")

@section("header","Inserción de Asignaturas")

@section("content")
        <form action="{{ route('subject.update', ['subject' => $subject->id])}}" method="POST">
        @method("PATCH")
        @csrf
        <div class="d-flex justify-content-center">
            <div  class="w-50 m-3">
                <div class="input-group mb-3">
                    Name:<input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="{{ $subject->name ?? '' }}">
                </div>
                <div class="input-group mb-3 ">
                    Weekly hours:<input type="text" class="form-control" aria-describedby="basic-addon1" name="weekly_hours" value="{{ $subject->weekly_hours ?? '' }}">
                </div>
                <div class="input-group mb-3 ">
                    Total hours:<input type="text" class="form-control" aria-describedby="basic-addon1" name="total_hours" value="{{ $subject->total_hours ?? '' }}">
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