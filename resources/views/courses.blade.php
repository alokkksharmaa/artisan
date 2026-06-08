<!DOCTYPE html>
<html>
<head>
    <title>Course List</title>
</head>
<body>

    @if(session('error'))
        <p
            {{ session('error') }}
        </p>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Course Name</th>
        </tr>

        @foreach($courses as $course)
        <tr>
            <td>{{ $course['id'] }}</td>
            <td>{{ $course['name'] }}</td>
            <td>
                <a href="{{ route('admin.courses.show', ['id' => $course['id']]) }}">
                    View
                </a>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>