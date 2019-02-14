<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="script/caculoImc.php" type="script/php"></script>
</head>
<body>

    <input type="number" name="peso" id="peso" placeholder="Peso" value="10" /></br>
    <input type="altura" name="altura" id="altura" placeholder="Peso" value="11"  /></br>
    <input class="button" type="submit" name="submit" id="submit" value="Enviar" />

    <?php exibeImc() ?>
</body>
</html>