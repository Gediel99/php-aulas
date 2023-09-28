<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Document</title>
</head>

<body>
    <?php
        $x = 5;
        $y = 10;

        function testa_escopo()
        {
            global $x;
            $x = $x + 1;

            $GLOBALS["y"] = $GLOBALS["y"] + 1;
        }
        echo $x . "<br />";
        echo $y . "<br />";
        testa_escopo();
        echo $x . "<br />";
        echo $y . "<br />";
    ?>
</body>

</html>