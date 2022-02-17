<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="{{ asset('css/estilo.css')}}">



    <title>Gerencia IP</title>
</head>
<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
          <header>
            <a href="#">Bem vindo</a>
          </header>
          <ul class="nav">
            <li>
              <a href="/lojas">
                <i class="zmdi zmdi-view-dashboard"></i> Lojas
              </a>
            </li>
            <li>
              <a href="/ip">
                <i class="zmdi zmdi-link"></i> IP
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-widgets"></i> Relatorios
              </a>
            </li>    
           
          
          </ul>
        </div>
        <!-- Content -->
        <div id="content">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                  </a>
                </li>
                <li><a href="#">Test User</a></li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid">
            @yield('conteudo')
          </div>
        </div>
      </div>
    
    
</body>
</html>