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
    <h3>Lista de tareas</h3>

    <form method="post" class="col-4 mt-4" action="/tarea">
        {{csrf_field()}}
        <p class="lead">Nueva tarea</p>
        <label><b>Tarea</b></label><br>
        <input type="text" name="nombre" class="form-control"><br>
        <input type="submit" value="+ Añadir">
    </form>

    <div class="mt-5">
        <p class="lead">Tareas actuales</p>
        <label><b>Tarea</b></label><br>
        <table>
            @yield('tabla')
        </table>
    </div>
</body>
</html>