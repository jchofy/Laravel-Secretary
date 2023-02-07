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
                    <th class="text-center" scope="col">Surname</th>
                    <th class="text-center" scope="col">Sex</th>
                    <th class="text-center" scope="col">Age</th>
                    <th class="text-center" scope="col"></th>
                    <th class="text-center" scope="col"></th>
                </tr>
            </thead>
            @foreach ($data as $student)
            <tbody>
                <tr>
                    <th class="text-center" scope="row">{{$student['id']}}</th>
                    <td class="text-center">{{$student['name']}}</td>
                    <td class="text-center">{{$student['surname']}}</td>
                    <td class="text-center">{{$student['sex']}}</td>
                    <td class="text-center">{{$student['age']}}</td>
                    <td class="text-center"><a href="{{route('student.edit',$student->id)}}"><button class="btn btn-warning">Modify</button></a></td>
                    <td>
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <h3 class="text-center mt-4">Subjects enrolled</h3>
        @if($subjects->count()>0)
        <table class="table w-50 mt-3">
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Note</th>
                <th class="text-center">Evaluation Date</th>
            </tr>
            @foreach($subjects as $subject)
            <tr>
                <td class="text-center">{{$subject->name}}</td>
                <td class="text-center">{{$subject->note}}</td>
                <td class="text-center">{{$subject->evaluation_date}}</td>
            </tr>
            @endforeach
        </table>
        @endif
        @if($subjects->count()==0)
            <p class="text-center mt-3">The student {{$student['name']}} haven't subjects</p>
        @endif
    </div>
    @endsection
</body>

</html>