<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    
    <title>Formulario</title>

    <link rel="icon" href="../../img/social-icon.ico">

</head>

<body>
    <?php
    $id = $_GET['id'];
  

    ?>

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/simutech.png" alt="" width="400" height="100">
            </div>

            <div class="row g-5">
                <div class="Formulario">
                    <h2 class="mb-3">Eliminar Datos</h2>
                    <p class="lead">Completar este formulario para tener mas informacion acerca de usted y poder contactarnos.</p>
                    <form action="borrar.php" method="post">
                        <div class="Formulario">
                            <label for="First_name" class="form-label">ID:</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $id ?>" placeholder="" required="">
                        

                       

                            <hr class="my-4">
                            <button class="w-100 btn btn-primary btn-lg " type="submit">Eliminar</button>
                        </div>

                        <div class="Formulario">
                            <a href="../adim/adim.php" button class="w-100 btn btn-primary btn-lg ">Cancelar</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2022 SIMUTECH</p>
        </footer>
    </div>
</body>

</html>