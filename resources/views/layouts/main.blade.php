<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    
                    <a href="/"  class="navbar-brand">
                        <img src="/img/house-chimney.png" alt="HTC Events">
                    </a>
                    <ul class="navbar-nav">
                        @auth
                        <li class='nav-item'>
                            <a href="/dashboard" class="nav-link">Meus alunos</a>
                        </li>
                     

                        <li class='nav-item'>
                            <a href="/events/create" class="nav-link">Matricular Aluno</a>
                        </li>
                        <li class='nav-item'>
                            <a href="/events/contacts" class="nav-link">Histórico de pagamentos</a>
                        </li>
                        <li class='nav-item'>
                            <a href="/events/products" class="nav-link">Painel de controle</a>
                        </li>

                        <li class='nav-item'>
                          
                            <form action="/logout" class="nav-link" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link"
                                onclick="event.preventDefault();
                                 this.closest('form').submit();">
                                 Sair
                               </a>
                            </form>
                        </li>
                        @endauth
                      
                        @guest
                        <li class='nav-item'>
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>

                        <li class='nav-item'>
                            <a href="/register" class="nav-link">Cadastre-se</a>
                        </li>
                    
                        @endguest
                    </ul>
                </div>
            </nav>

        </header>
      @yield('content')
        <footer>
            <p>Acaraú Figth&copy; 2024</p>
        </footer>
    </body>
</html>
