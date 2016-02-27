<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="css/animate.css">
    <title>Hack for Life</title>
</head>
<body>
<?php //Ejemplo aprenderaprogramar.com, archivo escribir.php
$file = fopen("alertas.txt", "w");
fwrite($file, $_POST["nombre"] . PHP_EOL);
fwrite($file, $_POST["apellidos"] . PHP_EOL);
fwrite($file, $_POST["mail"] . PHP_EOL);
fwrite($file, $_POST["myText"] . PHP_EOL);
fwrite($file, $_POST["myText2"] . PHP_EOL);

fclose($file);
?>
</body>
</html>
