
<?php 
    
    function calculaImc () {

        $peso = $_GET['peso'];
        $altura = $_GET['altura'];

        $multiplicacao = $altura * $altura;
        $divsao = $peso/$multiplicacao; 

        $result = number_format($divsao);

        if (isset($result)) { 
            echo "<h1> Resultado do imc: </br>" . $result . "<h1>";
        } else {
            echo "Insira apenas numeros";
        }
    }

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style/main.css">
</head>
<body>
    <?php calculaImc(); ?>
</body>
</html>
