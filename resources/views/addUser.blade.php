<h1> Form Validation Page </h1>

<form  action="/adduser" method="POST">
  @csrf
   <label> Name: </label>
  <input type="text" name="username">  <br>
<span class="text-danger">
@error("username")
{{ $message }}  
@enderror
</span>
<br>
<br>

