<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="container row m-4 bg-light">
    <h3 class="col-3"><a href="/" class="text-dark" style="text-decoration: none;">Lista de tareas</a></h3>

    <div class="dropdown col-8 ms-5">
        <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            =
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/nuevo">Nueva Tarea</a></li>
            <li><a class="dropdown-item" href="/button">Tareas actuales</a></li>
            <li><a class="dropdown-item" href="/search">Buscar Tarea</a></li>
        </ul>
    </div>
    @yield("contenido")
    @yield("mostrar")
    @yield("buscar")
</body>
</html>