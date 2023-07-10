<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mayor_menor.css">
    <!--se realizó corrección del title para que coincida con el menú del tercer apartado de la pagina principal-->
    <title>Verificar mayor y menor de edad</title>
</head>
<body>
<!--aquí se crea el redireccionamiento hacia la pagina principal-->   
<a href="http://localhost/xampp/taller/#section-respuestas">  
        <img class="home" src="img/hogar2.png" alt="imagen de casa que lleva a la página principal">
</a>
<!--método POST-->
    <div class="main-frame-cal">
     <form action="" method="POST">
         <div class="form-group">
             <label for="exampleFormControlInput1">Edad</label>
             <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
         </div>
         <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>
     </form>

     <?php

         $edad = 0;
         #const constante_0 = 18;
         const constante_18 = 18;
         define ("constante0","0");
    
         if (isset($_POST['verificar'])) {
             $edad = $_POST['edad'];

             if ($edad >= constante_18) {
                 echo "<h2>Es mayor de edad</h2>";
             }
             #else if (18 > $edad && 0 < $edad)
             elseif ($edad < constante_18 && $edad > constante0) {
                 echo "<h2>Es menor de edad</h2>";
             }else{
                #se realiza corrección de la palabra "valido" a "válido"
                 echo "<h2>No válido</h2>";
             }
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