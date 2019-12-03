<html>

<head>
</head>

<body>

<?php

    $user = $_REQUEST['usuario'];
    $passwd = $_REQUEST['clave'];

    if ( strlen($user) == 0 || strlen($passwd) == 0) {
        header("Locaion: Formulario.html");
    }else{
        echo "<br>Bienvenido a mi web";
    }


?>

</body>

</html>



