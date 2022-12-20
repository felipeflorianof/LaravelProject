<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
                        <a href="/" class="nav-link">Eventos

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/event/create" class="nav-link">Criar Evento
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Entrar
                            
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar
                            
                        </a>
                    </li>
                </ul>
           </div>
        </nav>
    </header>

    @yield('content')
    <footer>
        <p><a href="https://github.com/felipeflorianof" target="_blank">Felipe Floriano F. &copy;</a></p>
    </footer>
    <style>
        a{
            text-decoration: none;
            color: black;
        }

        footer{
        
        border-top: 1px solid #A0A0A0b2;
        bottom: 0;
        position: fixed;
        width: 100%;
        text-align: center;
        }
    </style>
</body>
</html>