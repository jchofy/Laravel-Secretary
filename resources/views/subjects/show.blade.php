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

<div class="d-flex justify-content-center flex-column align-items-center">
    <table class="table w-50 mt-5">
        <thead>
            <tr>
            <th class="text-center" scope="col">#</th>
            <th class="text-center" scope="col">Name</th>
            <th class="text-center" scope="col">Weekly Hours</th>
            <th class="text-center" scope="col">Total Hours</th>
            <th class="text-center" scope="col"></th>
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
            <td class="text-center"><a href="{{route('subject.edit',$subject->id)}}"><button class="btn btn-warning">Modify</button></a></td>
            <td>
                <form action="{{ route('subject.destroy', $subject->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <h3 class="text-center mt-4">Student's enrolled</h3>
    @if($students->count()>0)
        <table class="table w-50 mt-3">
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Surname</th>
                <th class="text-center">Sex</th>
                <th class="text-center">Age</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td class="text-center">{{$student->name}}</td>
                <td class="text-center">{{$student->surname}}</td>
                <td class="text-center">{{$student->sex}}</td>
                <td class="text-center">{{$student->age}}</td>
            </tr>
            @endforeach
        </table>
        @endif
    @if($students->count()==0)
        <div class="alert alert-danger" role="alert">
        The subject {{$subject['name']}} haven't students
        </div>
    @endif
</div>

@endsection
</body>
</html>