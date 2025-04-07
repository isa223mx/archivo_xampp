<html>
    <head>
        <title>calculos</title>
    </head>
    <body>
        <h1>calculos, reedonde y formaro.</h1>
        <?php
            $iva=0.196;
            $resultado=$precioneto*$iva;
            $precio=100;
            $precioneto=101.98;

            echo "el precio neto es: $precioneto<br>";
            echo "el iva es: $iva<br>";
            echo "el resultado es: $resultado<br>";
            echo "el precio es: $precio<br>";  
            echo "el precio redondeado es: ".round($precio)."<br>";
            $resultado2= sprintf("%01.2f", $resultado);
            echo "el resultado formateado es: $resultado2<br>";
        ?>
    </body>
</html>