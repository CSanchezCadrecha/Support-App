<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">

=======
<html lang="es">
>>>>>>> develop
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="src\css\style.css">
    <title>Home</title>
</head>

<body>
    <h1>Home View</h1>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img id="logo-img" class="shadow bg-white rounded" src="src/assets/logo.png" alt="imagen logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="?action=edit">Editar</a>
                        <a class="nav-link" href="?action=new">Nueva Solicitud</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div>
            <h3>Listado Solicitudes</h3>
            <h5>Tabla</h5>
            <div id="list"></div>
        </div>
    </main>

    <footer>
        <div class="d-flex justify-content-center">
            <h6>©2022 FEM Desk</h6>
        </div>
    </footer>

    <?php
    // var_dump($data);

    /* foreach ($data as $key => $value) {
            $html = <<<HTML
                <div>
                    $key . ':' . $value
                </div>
            HTML;

            echo $html;
        }

        echo "home sweet home. Hello {$data['name']}." */
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>