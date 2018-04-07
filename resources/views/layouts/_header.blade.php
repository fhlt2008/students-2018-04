<div class="navbar navbar-default navbar-static-top">
    @auth
        <form action="{{ route('logout') }}" method="post">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}">Login</a>
    @endauth
</div>