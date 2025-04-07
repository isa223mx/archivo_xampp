<html>
    <head>
        <title>ejemplo de operadores</title>

    </head>
    <body>
        <h1>ejemplo de operaciones en comparaciones</h1>
        <?php
        $a=8;
        $b=3;
        $c=3;
        echo "la comparacion de $a == $b es: ".($a==$b)."<br>";
        echo "la comparacion de $a != $b es: ".($a!=$b)."<br>";
        echo "la comparacion de $a > $b es: ".($a>$b)."<br>";
        echo "la comparacion de $a < $b es: ".($a<$b)."<br>";
        echo "la comparacion de $a >= $b es: ".($a>=$b)."<br>";
        echo "la comparacion de $a <= $b es: ".($a<=$b)."<br>";
        echo "la comparacion de $b == $c es: ".($b==$c)."<br>";
        echo "la comparacion de $b === $c es: ".($b===$c)."<br>";   
        ?>
    </body>
</html>