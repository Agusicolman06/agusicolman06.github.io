<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/register</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="asasinicono.ico">
    
</head>

<body>
    
<div>
    <article>
    <?php
    if ($_SESSION["infosesion"] == "error" ){
        echo "mail o contraseña erronea";
    } 
    ?>

    <form action="login.php" method="POST">

        <h1>Log In</h1>
            
            <h3>Mail</h3>
            <center><input name="mail" type="text"></center>
            <h3>Contraseña</h3>
            <center><input name="contrasena" type="password"></center>
            <h3>¿todavia no tienes una cuenta?<br><a style="color: rgb(0, 140, 255);" href="register.html">haz clic aqui</a></h3>
            <br>
            <center><input type="submit" class="enviar"></center>

        </article>

    </form>
	</form>

</div>


</body>
</html>