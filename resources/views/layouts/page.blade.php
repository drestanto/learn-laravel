<html>
	<style>
		table, th, td {
		    border: 1px solid black;
		}
	</style>
    <body>
        <h1>The Link</h1>

        @yield('content')
    	<br>
	    <br>
	    <a href="/home"> <button> Home </button></a>
	    @if (Auth::check())
		    <a href="/logout"><button>Logout</button></a>
		@endif
		@if(Auth::guest())
            <a href="/login"><button>Login</button></a>
        @endif
    </body>
</html>