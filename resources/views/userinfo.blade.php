<!DOCTYPE html>
<html>
<body>

<form action="/user-store" method="POST">

    @csrf

    Name:
    <input type="text" name="name">
    <br><br>

    Age:
    <input type="number" name="age">
    <br><br>

    Favorite Language:

    <select name="language">
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Python">Python</option>
    </select>

    <br><br>

    <button type="submit">
        Submit
    </button>

</form>

</body>
</html>