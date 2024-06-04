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
        echo"<p>Habla parce</p>";
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
        $nombre= validarName("name");
        $edad=18;
        echo "<p>"."Nombre: ".$nombre." Edad:".$edad. "</p>";

        #GET
        echo"<hr/>";
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
 function validarName($valor){
            if (isset($_GET["$valor"])) {
                $val=$_GET["$valor"];
            }else{
                $val= "por defecto";
            }
            return $val;
        }    
        
        ?>
</body>
</html>