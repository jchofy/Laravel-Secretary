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
            <th class="text-center" scope="col">Weekly Hours</th>
            <th class="text-center" scope="col">Total Hours</th>
            <th class="text-center" scope="col"></th>
     
            </tr>
        </thead>
        @foreach ($data as $subject)
        <tbody>
            <tr>
            <th class="text-center" scope="row">{{$subject->id}}</th>
            <td class="text-center">{{$subject->name}}</td>
            <td class="text-center">{{$subject->weekly_hours}}</td>
            <td class="text-center">{{$subject->total_hours}}</td>
            <td class="text-center"><a href="{{route('subject.edit',$subject->id)}}"><button class="btn btn-warning">Modificar</button></a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection
</body>
</html>