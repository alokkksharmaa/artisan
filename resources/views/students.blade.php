<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h2>Student List</h2>

<ul>

@foreach($students as $student)

    <li>
        <a href="/student/{{ $student['id'] }}">
            {{ $student['name'] }}
        </a>
    </li>

@endforeach

</ul>

</body>
</html>