<!DOCTYPE html>
<html>
<head>
    <title>My Web App</title>
</head>
<body>
    <nav>
        <a href="{{ route('posts.index') }}">Home</a>
        @auth
            <a href="{{ route('posts.create') }}">Create Post</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>
