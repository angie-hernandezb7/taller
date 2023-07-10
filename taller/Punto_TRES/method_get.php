<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/method_get.css">
    <!--se realizó corrección del title para que coincida con el menú del tercer apartado de la pagina principal-->
    <title>Envío  de datos GET</title>
</head>
<body>
<!--aquí se crea el redireccionamiento hacia la pagina principal-->   
<a href="http://localhost/xampp/taller/#section-respuestas">  
        <img class="home" src="img/hogar.png" alt="imagen de casa que lleva a la página principal">
    </a>
    <!--Método GET-->
    <div class="main-frame-cal">
        <!--se corrigió el method cambiando de "POST" a "GET"-->
    <form action="" method="GET">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <!--se realizó corrección en la letra capital de la palabra "Nombre" que se encuentra en el placeholder-->
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Por favor digite su nombre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellido</label>
            <!--se realizó corrección en la letra capital de la palabra "Apellido" que se encuentra en el placeholder-->
            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Por favor digite su apellido">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cédula</label>
            <!--se realizó corrección en la letra capital de la palabra "Cédula" que se encuentra en el placeholder-->
            <input type="text" name="cc" class="form-control" id="exampleFormControlInput1" placeholder="Por favor digite su cédula">
        </div>
        <!--se realizó corrección de la palabra "Evíar" a "Enviar" que se encuentra en el botón -->
        <!--se agregó negrilla en la palabra "Enviar" del botón-->
        <button type="submit" name="verificar" class="btn btn-outline-info"><b>Enviar</b></button>
    </form>

    <?php

    $edad = 0;
    
    if (isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cc'];
    
        echo "El nombre registrado es: ".$nombre."<br>";
        echo "El apellido registrado es: ".$apellido."<br>";
        echo "El número de cédula resgistrado es: ".$cedula."<br>";

    }

    ?>
    <!--sin la etiqueta </div> el footer quedaría dentro del formulario-->
    </div>
    <!--elemento pie de página-->
    <footer>
        <div>
            <h2 class="nombre">Angie Patricia Hernández Barreto</h2>
        </div>
    </footer>
</body>
</html>