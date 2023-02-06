<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends("layouts.master")

@section("title","Administración de Estudiantes")

@section("header","Administración de Estudiantes")

@section("content")

<div class="d-flex justify-content-center">
    <table class="table w-50">
        <thead>
            <tr>
            <th class="text-center" scope="col">#</th>
            <th class="text-center" scope="col">Name</th>
            <th class="text-center" scope="col">Surname</th>
            <th class="text-center" scope="col">Sex</th>
            <th class="text-center" scope="col">Age</th>
            <th class="text-center" scope="col"></th>
            </tr>
        </thead>
        @foreach ($data as $student)
        <tbody>
            <tr>
            <th class="text-center" scope="row">{{$student->id}}</th>
            <td class="text-center">{{$student->name}}</td>
            <td class="text-center">{{$student->surname}}</td>
            <td class="text-center">{{$student->sex}}</td>
            <td class="text-center">{{$student->age}}</td>
            <td class="text-center"><a href="{{route('student.edit',$student->id)}}"><button class="btn btn-warning">Modificar</button></a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection
</body>
</html>