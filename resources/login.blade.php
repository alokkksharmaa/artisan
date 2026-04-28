<!DOCTYPE html>
<html>
<head>

<title>Login</title>

</head>

<body>

<h2>Login</h2>

@if (session('error'))

<p style="color:red">

{{ session('error') }}

</p>

@endif

@if ($errors->any())

@foreach ($errors->all() as $error)

<p style="color:red">

{{ $error }}

</p>

@endforeach

@endif

<form method="POST" action="/login">

@csrf

Email:

<input
type="text"
name="email"
>

<br><br>

Password:

<input
type="password"
name="password"
>

<br><br>

<button type="submit">

Login

</button>

</form>

<a href="/register">

Register

</a>

</body>

</html>