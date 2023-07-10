<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--aquí llama a el css-->
    <link rel="stylesheet" href="css/edad_exacta.css">
    <!--se realizó corrección del title para que coincida con el menú del tercer apartado de la pagina principal-->
    <title>Calculadora exacta de edad</title>
</head>
<body>
    <!--aquí se crea el redireccionamiento hacia la pagina principal-->   
<a href="http://localhost/xampp/taller/#section-respuestas">  
        <img class="home" src="img/hogar44.png" alt="imagen de casa que lleva a la página principal">
    </a>
    <!--Método POST-->
    <div class="main-frame-cal">
        <!--se añadieron el action y el method-->
    <form action="" method="POST">
        <div class="form-group">
            <!--se realizó la corrección ortográfica de la palabra "seleecione"-->
            <label for="exampleFormControlInput1">Por favor seleccione su fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="exampleFormControlInput1">
        </div>
        <!--se realizó corrección de la palabra "Evíar" a "Enviar" que se encuentra en el botón -->
        <!--se agregó negrilla en la palabra "Enviar" del botón-->
        <!--se agrega el atributo type-->
        <button type="submit" name="verificar" class="btn btn-outline-info"><b>Enviar</b></button>
    </form>
    
    <?php
        
        $comprobar = var_dump($_POST);
        $edad = 0;
        #const constante_0 = 18;
        const constante_18 = 18;
        define ("constante0","0");
    
    if (isset($_POST['verificar'])) {
        $fecha = new DateTime($_POST['fecha_nacimiento']);
       
        $date2 = new DateTime(date("y-m-d"));

        $fecha_actual = $fecha->diff($date2);
        #se cambió la variable fecha de los meses y días 
        $edad_actual = $fecha_actual->y;
        $edad_meses = $fecha_actual->m;
        $edad_dias = $fecha_actual->d;

        if ($edad_actual >= constante_18) {
            echo "<h2>Es mayor de edad, dado que tiene " .$edad_actual. " años </h2>";
        }
        #else if (18 > $edad && 0 < $edad)
        elseif ($edad_actual < constante_18 && $edad_actual > constante0) {
            echo "<h2>Es menor de edad, dado que tiene " .$edad_actual. " años </h2>";
        }else{
           #se realiza corrección de la palabra "valido" a "válido"
            echo "<h2>No válido</h2>";
        }

        #se añadió texto para mostrar de manera más completa el resultado
        echo "Usted tiene: ".$edad_actual. " años", " con ".$edad_meses. " meses ", "y ".$edad_dias. " días de vida";
        echo $comprobar;
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