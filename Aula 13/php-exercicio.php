<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php 
    $ceu = array("Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Belgica"=> "Bruxelas", 
    "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "França" => "Paris", 
    "Eslovaquia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemanha" => "Berlim", "Grecia" => 
    "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisboa", 
    "Espanha"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"Londres", "Chipre"=>"Nicosia", 
    "Lituania"=>"Vilnius", "Republica Tcheca"=>"Praga", "Estonia"=>"Tallin", "Hungria"=>"Budapest", 
    "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Polônia"=>"Varsovia");

    function ordena (array $paises)
    {
        ksort($paises);
        foreach ($paises as $country => $capital){
            echo "A capital da $country => é $capital <br>";
        }
    }
        ordena($ceu);
    ?>

</body>
</html>