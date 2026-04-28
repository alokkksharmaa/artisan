<h1> Profile Page </h1>
{{ __ {{session("username")}}}}
@if(session('username'))
<h2> Welcome , {{ session('username') }}

  @else 
 </h2> No user found  <a href="login"> Login</h2>

  @endif
  <a href="/logout"
  