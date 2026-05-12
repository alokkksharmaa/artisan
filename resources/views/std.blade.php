<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="/students/store" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <button type="submit">Submit</button>
    </form>
    <br>
    <a href="/students">Back to List</a>
</body>
</html>
