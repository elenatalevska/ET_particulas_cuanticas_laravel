<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Partículas</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        main {width: 70%;margin: auto;}
        img {width: 80%; display: block; margin: auto;}
        footer {text-align: center;}
    </style>
</head>
<body>
    <main>
        <h1 class="text-center">{{$pagina}}</h1>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/particulas">Lista de partículas</a>
                        <a class="nav-link" href="/alta">Alta partícula</a>
                    </div>
                </div>
            </div>
        </nav>
  
      
        <section>
            @yield('contenido')>
        </section>
        <hr>
        <footer>
            <p>&copy; 2023</p>
        </footer>
    </main>
</body>
</html>
