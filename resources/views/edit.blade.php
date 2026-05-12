<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="/students/update/{{ $student->id }}" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $student->email }}" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value="{{ $student->age }}" required><br><br>

        <button type="submit">Update</button>
    </form>
    <br>
    <a href="/students">Back to List</a>
</body>
</html>
