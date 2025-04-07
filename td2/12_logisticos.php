<html>
    <head>
        <title>ejemplo de operadores logicos</title>
    </head>
    <h1>ejemplo de operadores logicoos</h1>
    <?php
        $a=8;
        $b=3;
        $c=3;
        echo "la comparacion de $a == $b && $b == $c es: ".($a==$b && $b==$c)."<br>";
        echo "la comparacion de $a == $b || $b == $c es: ".($a==$b || $b==$c)."<br>";
        echo "la comparacion de $a == $b xor $b == $c es: ".($a==$b xor $b==$c)."<br>";
        echo "la comparacion de !($a == $b) es: ".!($a==$b)."<br>";
    ?>
</html>