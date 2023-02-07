<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
@extends("layouts.master")

@section("title","Inserción de Estudiantes")

@section("header","Inserción de Estudiantes")

@section("content")
    <div class="d-flex justify-content-center">
        <form action="{{route('student.store')}}" class="w-50 mt-5" method="post">
            @csrf
            <p>Name: </p>
            <input class="form-control mb-2" type="text" name="name" require placeholder="name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <p>Surname: </p>
            <input class="form-control mb-2" type="text" name="surname" require placeholder="surname">
            @error('surname')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <p>Sex: </p>
            <input class="form-control mb-2" type="text" name="sex" require placeholder="sex">
            @error('sex')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <p>Age: </p>
            <input class="form-control mb-2" type="number" name="age" require placeholder="age">
            @error('age')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="d-flex justify-content-center mt-3">
                <input class="btn btn-primary w-25" type="submit" value="Send">
            </div>
        </form>
    </div>
    @endsection
</body>

</html>