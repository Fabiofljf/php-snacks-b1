<!-- 
    ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<?php
$partite = [

        "squadraCasa" => "Messina",
        "puntiCasa" => 20,
        "squadraOspite" => "Catania",
        "puntiOspite" => 30,
];

var_dump($partite);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo $partite['squadraCasa'] ?>
    </h1>
    Vs
    <h1>
        <?php echo $partite['squadraOspite'] ?>
    </h1>
    <h2>
        Risultato: <?php echo $partite['puntiCasa'] ?> - <?php echo $partite['puntiOspite'] ?>
    </h2>
</body>
</html>