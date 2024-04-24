<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Create</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Create a Course</h1>

    <div class="container">
   
        <div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        
        <form action="{{ route('course.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="code">Course Code:</label>
                <input type="string" class="form-control" id="code" name="course_code" required>
            </div>
            <div class="form-group">
                <label for="title">Course Title:</label>
                <input type="string" class="form-control" id="title" name="course_title" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
