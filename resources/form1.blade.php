<form method="POST" action="/submit">
  @csrf
  Name: <input type="text" name="name"> <br>
  Email: <input type="text" name="email"> <br>
  <button type="Submit"> Submit </button>
</form>