<!DOCTYPE html>
<html>
<head>
    <title>Laravel Form</title>
</head>
<body>

<form method="POST" action="/form">
    @csrf

    <label>Name:</label>
    <input type="text" name="name"><br><br>

    <label>Email:</label>
    <input type="email" name="email"><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>