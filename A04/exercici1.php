<!DOCTYPE html>
<html lang="ca">
<head>···
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['nom'] && !empty($_POST['cognoms']))) {
                $nom = htmlspecialchars(trim($_POST['nom']));
                $cognoms = htmlspecialchars(trim($_POST['cognoms']));
                echo "<h2>Hola, $nom $cognoms!</h2>";
            } else {
                echo "<h2>El camp nom està buit. Si us plau, introdueix el teu nom.</h2>";
            }
        } else {
            echo "<h2>Accés no vàlid.</h2>";
        }
        ?>
    </div>
</body>
</html>