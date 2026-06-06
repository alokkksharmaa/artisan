<!DOCTYPE html>
<html>
<body>

<h2>User Records</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Language</th>
</tr>

@foreach($users as $user)

<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->age }}</td>
    <td>{{ $user->language }}</td>
</tr>

@endforeach

</table>

</body>
</html>