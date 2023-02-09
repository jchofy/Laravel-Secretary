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


    <table class="table mt-5">
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
        @foreach ($studentList as $student)
        <tbody>
            <tr>
                <th class="text-center" scope="row">{{$student->id}}</th>
                <td class="text-center">{{$student->name}}</td>
                <td class="text-center">{{$student->surname}}</td>
                <td class="text-center">{{$student->sex}}</td>
                <td class="text-center">{{$student->age}}</td>
                <td><a href="{{route('student.show',$student->id)}}"><button class="btn btn-primary">Show</button></a></td>

            </tr>
        </tbody>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        <a href="{{route('student.create')}}"><button class="btn btn-success">Add Student +</button></a>
    </div>
    @endsection
</body>

</html>