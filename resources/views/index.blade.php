<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h2>Students List</h2>
    <a href="/students/create">Add New Student</a>
    <br><br>
    <table border="1" cellpadding="10" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    <a href="/students/edit/{{ $student->id }}">Edit</a> |
                    <a href="/students/delete/{{ $student->id }}" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
