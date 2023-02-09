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

@section("title","Administración de Asignaturas")

@section("header","Administración de Asignaturas")

@section("content")


    <table class="table mt-5">
        <thead>
            <tr>
            <th class="text-center" scope="col">#</th>
            <th class="text-center" scope="col">Name</th>
            <th class="text-center" scope="col">Weekly Hours</th>
            <th class="text-center" scope="col">Total Hours</th>
            <th class="text-center" scope="col"></th>
            <!--<th class="text-center" scope="col"></th> -->
            </tr>
        </thead>
        @foreach ($subjectList as $subject)
        <tbody>
            <tr>
            <th class="text-center" scope="row">{{$subject->id}}</th>
            <td class="text-center">{{$subject->name}}</td>
            <td class="text-center">{{$subject->weekly_hours}}</td>
            <td class="text-center">{{$subject->total_hours}}</td>
            <td><a href="{{route('subject.show',$subject->id)}}"><button class="btn btn-primary">Show</button></a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        <a href="{{route('subject.create')}}"><button class="btn btn-success">Add Subject +</button></a>
    </div>
@endsection


</body>
</html>