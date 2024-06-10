<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Fundamentos de php</h1>
    <?php
    #imprimir
    echo "<p>Habla parce</p>";
    print("habla burro");
    /*comentarios*/
    //comentario

    echo "<!--comentario html-->";

    #Variables
    //el punto(.) se usa para concatenar
    // if (isset($_GET["name"])) {
    //     $nombre=$_GET["name"];
    // }else{
    //     $nombre= "Dillon";
    // }
    $nombre = validarName("name");
    $edad = 18;
    echo "<p>" . "Nombre: " . $nombre . " Edad:" . $edad . "</p>";

    #GET
    echo "<hr/>";
    // $_GET["name"];

    #funciones
    // function validarName(){
    //     if (isset($_GET["name"])) {
    //         $nombre=$_GET["name"];
    //     }else{
    //         $nombre= "Dillon";
    //     }
    //     return $nombre;
    // }
    function validarName($valor)
    {
        if (isset($_GET["$valor"])) {
            $val = $_GET["$valor"];
        } else {
            $val = "por defecto";
        }
        return $val;
    }

    #Arrays
    $personas = ["Junior", "Dillon", "Naisir"];
    echo $personas[0];
    ?>

    <h3>Listado Array</h3>
    <ul>
        <?php
        foreach ($personas as $person) {
            echo "<li>" . $person . "</li>";
        }
        ?>
    </ul>

    #Ciclos
    <p>ciclo for</p>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo " $i\n";
        echo "<br/>";
    }
    ?>
    <hr>
    <p>ciclo while</p>
    <?php
    $num = 5;
    while ($num >= 0) {
        echo " $num\n";
        echo "<br/>";
        $num--;
    }
    ?>
    <hr>
    <p>ciclo do while</p>
    <?php
    $num = 5;
    do {
        echo"Carlitos <br/>";
        $num--;
    }
    while ($num >= 0) 
    ?>
</body>

</html>