<h1> Welcome Page</h1>
<h1> {{ $uniName }} </h1>
<h1> {{ $contactEmail }} </h1>
    
{{-- <a href="{{ route("about") }}">About</a> --}}
<a href="/dashboard" > Dashboard</a>



{{-- <a href="{{ route("about")}}">About </a> --}}
<a href="/home"> Home </a>
<a href="{{ URL::to("about") }}"


{{-- @include("admin.footer"); --}}

{{ url::current()}}
{{ url()->current }}