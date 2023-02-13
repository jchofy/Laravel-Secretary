<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @extends("layouts.master")

    @section("title","Modificación de notas")

    @section("header","Modificación de notas")

    @section("content")
    <h2 class="text-center mt-5 mb-4">Evaluate the student</h2>
    <form action="{{ route('enrollment.update', ['enrollment' => $enrollment[0]->student_id, $enrollment[0]->subject_id])}}" method="POST">
        @method("PATCH")
        @csrf
        <div class="d-flex justify-content-center">
            <div class="w-50 m-3">
                <div class="input-group mb-3">
                    Note:<input type="text" class="form-control" aria-describedby="basic-addon1" name="note" value="{{ $enrollment[0]->note ?? '' }}">
                </div>
                <input name="subject_id" value="{{$enrollment[0]->subject_id}}" type="hidden">
                <input name="student_id" value="{{$enrollment[0]->student_id}}" type="hidden">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Send" class="btn btn-success m-3">
        </div>
    </form>
    @endsection
</body>

</html>