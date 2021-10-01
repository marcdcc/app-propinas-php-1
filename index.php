<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>App propinas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/calculator-solid.svg" type="image/x-icon">
</head>

<body>
    <div class="main">
        <div><h2>Calculador de propinas</h2></div>
    <form action="processes/calculo.proc.php" method="POST">
        <input type="number" name="cuenta" id="" placeholder="total de la cuenta..."> <!--step="0.01"-->
        <select name="servicio" id="">
            <option value="0.3">30% Excelente</option>
            <option value="0.2">20% Bueno</option>
            <option value="0.1" selected>10% Normal</option>
            <option value="0.05">5% Malo</option>
        </select>
        <input type="number" name="personas" id="" placeholder="¿cuentas personas van a pagar?">
        <input type="submit" value="Calcular" name="submit">

    </form>
    <?php
    if(isset($_REQUEST['res'])){
        echo "<p>total a pagar</p>";
        echo "<h3>".$_REQUEST['res']." por persona</h3>";
    }
    ?>
    </div>
</body>

</html>