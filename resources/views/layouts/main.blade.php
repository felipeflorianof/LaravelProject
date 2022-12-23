<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('title', 'Course')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
           <div class="collapse navbar-collapse" id="navbar">
                <img src="/IMG/hdcevents_logo.svg" alt="logo" style{
                    width="30px"
                }>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Events

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/event/create" class="nav-link">Create Event
                            
                        </a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">My Events
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">Sair </a>
                        </form>
                        
                    </li>
                    @endauth

                    @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Log in
                            
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/register" class="nav-link">Register
                            
                        </a>
                    </li>
                    @endguest
                </ul>
           </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>
</html>