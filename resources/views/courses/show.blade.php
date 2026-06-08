<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>

    <h2>Course Details</h2>

    <p><strong>ID:</strong> {{ $course['id'] }}</p>

    <p><strong>Name:</strong> {{ $course['name'] }}</p>

    <a href="{{ route('admin.courses.index') }}">
        Back to Course List
    </a>

</body>
</html>