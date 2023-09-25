<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assassin's creed</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="asasinicono.ico">
</head>
<body>
    <header class="header">Assassin's Creed
    <br>
    <?php
                $servername = "localhost";
                $username = "phpmyadmin";
                $password = "RedesInformaticas";
                $dbname = "db_colman";
                $conexion = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT contador FROM visitas WHERE visitas.id = 1";
                $resultado = mysqli_query($conexion, $sql);
                $contador = mysqli_fetch_assoc($resultado)['contador'];
                $contador = $contador + 1;

                $fechavisita = date("y/m/d");
                $sql = "UPDATE visitas SET contador = '$contador', fecha = '$fechavisita' WHERE visitas.id = 1";
                

                if (mysqli_query($conexion, $sql)) {
                $success = "El ingreso ha sido satisfactorio";
                } else {
                echo "Error de ingreso: " . mysqli_error($conexion);
                }
                echo "<li class=\"contador\">$contador</li>";
            
            ?>
            </header>
   <nav>
    <a href="#Inicio">Inicio</a>
    <a href="#Historia">Historia</a>
    <a href="#Imagenes">Imagenes</a>
    <a href="#Juegos">Juegos</a>
    <a href="#Videos">Videos </a>
    <div class="animation start-home"></div>
   </nav>
   <br> <br>
   
   
    <h1 class="Inicio" id="Inicio">Inicio</h1>

    <div class="div1">
    <h1>Desarrollador principal</h1>
    <p class="p1">Ubisoft Entertainment es una compañía francesa desarrolladora y distribuidora de videojuegos, creada el 28 de marzo de 1986, sus oficinas centrales se ubican en Montreuil-sous-Bois, Francia.
    </p> <br>
    <img class="img1" src="imagenes/Ubisoft_logo.png" alt="" >
    </div>
    

    <div class="div2">
        <h1>Distribuidores</h1>
        <p class="p1">Gameloft es una empresa internacional dedicada a crear y fabricar videojuegos para PC y teléfonos. Tiene su sede central en Francia, con oficinas alrededor de todo el mundo. Este es uno de los distribuidores a parte de Ubisoft.
        </p>
        <img class="img2" src="imagenes/Gameloft.png" alt="">
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    <h1 class="Inicio" id="Historia">Historia</h1>

    <div class="container2">
        <p class="p2">
            La historia de la saga assassin's creed se reparte a través de varios juegos, en esta se encuantran dos bandos participes sobre el afecto en la sociedad que serian por un parte los templarios, que creían que la forma de lograr la sociedad perfecta era si ellos estaban al mando guiando a la humanidad, básicamente limitando la libertad de las personas, y por otro lado los asesinos que buscaban en un principio la paz realizando asesinatos estratégicos para conseguirla, después su objetivo cambiaría a buscar el libre albedrío de la humanidad, y bueno como claramente los ideales templarios y asesinos no eran iguales estos grupos se enfrentaron a lo largo de la historia hasta llegar al siglo 21. <br>
            En este siglo los templarios se esconderian a travez de las Industrias Abstergo, secuestrando asi a personas y metiendolas en una maquina llamada El Animus teniendo la capacidad de revivir recuerdos de antepasados para obtener informacion sobre un fruto poderoso llamado El fruto del Eden. Creado por los Isu, una raza superior muy avanzada e inteligentes. <br>
            Uno de los secuestros mas importantes es Desmond Miles o conocido como el Sujeto 17 protagonizando durante los primeros juegos.
        </p>
        <div class="box2">
        <img src="imagenes/desmond.png" alt="">
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
        <h1 class="Inicio" id="Imagenes">Imagenes</h1>
    <div class="container">
            <div class="box">
                <img src="imagenes/6.jpg" alt="" >
            </div>
            <div class="box">
                <img src="imagenes/sagacompleta.jpg" alt="" >
            </div>
            <div class="box">
                <img src="imagenes/23.jpg" alt="" >
            </div>
            <div class="box">
                <img src="imagenes/28.jpg" alt="" >
            </div>
            <div class="box">
                <img src="imagenes/30.jpg" alt="" >
            </div>
            <div class="box">
                <img src="imagenes/15.jpg" alt="" >
            </div>
    </div>

        <h1 class="juegos" id="Juegos">Juegos</h1>
    <div class="container3">
        <div class="div3">
        <img src="paginajgos/AC1.jpg" alt="" width="330px">
        
        <p>Assassin's Creed 1</p>
        </div>
        <div class="div3">
            <img src="paginajgos/AC2.jpg" alt="" width="320px">
        </div>

        <div class="div4">
            <img src="paginajgos/AC3.jpg" alt="" width="330px">
        </div>
        <div class="div4">
            <img src="paginajgos/AC4.jpg" alt="" width="320px">
        </div>
        <div class="div3">
            <img src="paginajgos/ACR.jpg" alt="" width="330px">
        </div>
        <div class="div4">
            <img src="paginajgos/ACU.jpg" alt="" width="320px" >
        </div>
    </div>
        

        <h1 class="juegos" id="Videos">Videos</h1>
        <div class="container">
        <div class="box">
        </div>
        <div class="box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NPZBAdRguK4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

        <a href="https://www.instagram.com/agusscolmann_/"><p id="pf">Realizado por Agustin Colman 5°3</p></a>
</html>