<!DOCTYPE html>
<html>
<head>
    <title>Teacher and Course Selection</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Select Teacher and Course</h1>

    <form action="/get-courses-by-teacher" method="POST">
        @csrf
        <div class="form-group">
            <label for="teacher">Select Teacher:</label>
            <select class="form-control" name="teacher_id" id="teacher">
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->teacherid }}">{{ $teacher->teachername }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="course">Select Course:</label>
            <select class="form-control" name="course_code" id="course">
                <!-- Options will be populated using JavaScript -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('#teacher').change(function(){
            var teacherId = $(this).val();

            $.ajax({
                url: '/get-courses-by-teacher',
                type: 'POST',
                data: {
                    '_token': $('input[name="_token"]').val(),
                    'teacher_id': teacherId
                },
                success: function(response){
                    if(response.status === 'success'){
                        var options = '';
                        $.each(response.data, function(key, value){
                            options += '<option value="' + value.coursecode + '">' + value.coursetitle + '</option>';
                        });
                        $('#course').html(options);
                    } else {
                        alert(response.message);
                    }
                }
            });
        });
    });
</script>

</body>
</html>
