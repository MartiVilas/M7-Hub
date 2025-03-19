<!--Creamos una variable de sesion que comprueba que el numero random exista y en caso de que no exista lo crea.-->
<?php 
session_start();
if (!isset($_SESSION['random'])) {
    $_SESSION['random'] = rand(0, 10);
}

if (!isset($_SESSION['intents'])) {
    $_SESSION['intents'] = 3;
}

$random = $_SESSION['random'];
$intents = $_SESSION['intents'];

// Chivato del random
echo ("<p>Número secret: " . $random . "</p>");
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número màgic 🍀</title>
</head>

<body>
    <p>Endevina el número entre 0 i 10</p>

    <!-- Creamos un formulario con el metodo post-->
    <form method="get">

    <!-- Creamos una celda en la que el usuario introduce el número-->
        <input type="number" name="numero" min="0" max="10"/> <br>  
    <!-- Boton que comprueba-->
        <button type="submit" name="button">Comprobar</button>
    </form>

    <?php
        // Comprobamos que el metodo del formulario sea post?
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            // Miramos el tag de html con nombre numero y le añadimos el valor a la variable numero.
            $numero = htmlspecialchars(trim($_REQUEST['numero']));
                
            // Miramos que exista el numero y este entre el rango
            if ($numero === false || $numero < 0 || $numero > 10) {
                echo("Et queden ". $intents . " intents.");

            // Si el numero de intentos es igual o menor a 0 le decimos que pierde
            // se pone menor a 2 porque como hace una ultima carga de la pagina en el ultimo intento pone 0
            //  y queremos que cuando se equivoque teniendo 1 intento que se le diga que no tiene intentos.
            }elseif($intents < 2){
                echo("T'has quedat sense intents! Has perdut! <br><br>");
                echo ("<a href='index.php'> Recarrega </a>");
                unset($_SESSION['random']); 
                //Se destruye la sesion para que cuando vuelva a empezar el numero sea diferente y los intentos se reinicien.
                session_destroy();

                // Si el numero es menor al random se le dice
            }elseif($numero < $random){ 
                $_SESSION['intents']--;  
                echo("El número que busques és més gran !! <br> Et queden ". $_SESSION['intents'] . " intents!");

                //Si el numero es mayor se le dice tambien
            }elseif($numero > $random){
                $_SESSION['intents']--;  
                echo("El número que busques és més petit !! <br> Et queden ". $_SESSION['intents'] . " intents!");

                //Si el numero es igual se le indica que si y se borra el valor del random para que cambie el número.
            }elseif ($numero == $random) {
                echo "<p>🎉 Endevinat! El número era $random.</p>";
                echo ("<a href='index.php'> Recarrega </a>");
                unset($_SESSION['random']); 
                //Se destruye la sesion para que cuando vuelva a empezar el numero sea diferente y los intentos se reinicien.
                session_destroy();
            }

        }
    ?>
</body>
</html>