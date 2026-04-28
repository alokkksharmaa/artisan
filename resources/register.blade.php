<!DOCTYPE html>
<html>
<head>

<title>Register</title>

</head>

<body>

<h2>Register</h2>

@if ($errors->any())

@foreach ($errors->all() as $error)

<p style="color:red">
{{ $error }}
</p>

@endforeach

@endif

<form method="POST" action="/register">

@csrf

Name:

<input
type="text"
name="name"
value="{{ old('name') }}"
>

<br><br>

Email:

<input
type="text"
name="email"
value="{{ old('email') }}"
>

<br><br>

Password:

<input
type="password"
name="password"
>

<br><br>

<button type="submit">

Register

</button>

</form>

<a href="/login">

Login

</a>

</body>

</html>