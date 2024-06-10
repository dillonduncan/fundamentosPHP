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
    function EdadPersona()
    {
        $edad = 18;
        echo $edad;
    }
    EdadPersona();
    echo "<br>";
    echo $edad;
    echo "<br>";
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

    <!-- ciclos -->
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
        echo "Carlitos <br/>";
        $num--;
    } while ($num >= 0)
    ?>

    <!-- variables globales -->
    <hr>
    <p>variables globales</p>
    <?php
    $num1 = 5;
    $num2 = 5;
    function sumar()
    {
        $GLOBALS['suma'] = $GLOBALS['num1'] + $GLOBALS['num2'];
    }
    sumar();
    echo $suma ."<br>";

    echo $_SERVER['SERVER_NAME']."<br>";
    ?>


    <?php
        $numero=$_GET['numero'];
        echo "El numero es: ".$numero;
    ?>
</body>

</html>