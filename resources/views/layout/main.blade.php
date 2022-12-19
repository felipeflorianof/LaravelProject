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
                <a href="/" class="navbar-brand">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-earbuds" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.825 4.138c.596 2.141-.36 3.593-2.389 4.117a4.432 4.432 0 0 1-2.018.054c-.048-.01.9 2.778 1.522 4.61l.41 1.205a.52.52 0 0 1-.346.659l-.593.19a.548.548 0 0 1-.69-.34L.184 6.99c-.696-2.137.662-4.309 2.564-4.8 2.029-.523 3.402 0 4.076 1.948zm-.868 2.221c.43-.112.561-.993.292-1.969-.269-.975-.836-1.675-1.266-1.563-.43.112-.561.994-.292 1.969.269.975.836 1.675 1.266 1.563zm3.218-2.221c-.596 2.141.36 3.593 2.389 4.117a4.434 4.434 0 0 0 2.018.054c.048-.01-.9 2.778-1.522 4.61l-.41 1.205a.52.52 0 0 0 .346.659l.593.19c.289.092.6-.06.69-.34l2.536-7.643c.696-2.137-.662-4.309-2.564-4.8-2.029-.523-3.402 0-4.076 1.948zm.868 2.221c-.43-.112-.561-.993-.292-1.969.269-.975.836-1.675 1.266-1.563.43.112.561.994.292 1.969-.269.975-.836 1.675-1.266 1.563z"/></svg>
                </a>

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