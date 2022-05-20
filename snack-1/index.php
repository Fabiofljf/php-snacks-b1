<!-- 
    ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<?php
$partite = [

        [
            "squadraCasa" => "Messina",
            "puntiCasa" => 20,
            "squadraOspite" => "Catania",
            "puntiOspite" => 30,
        ],
        [
            "squadraCasa" => "Palermo",
            "puntiCasa" => 23,
            "squadraOspite" => "Enna",
            "puntiOspite" => 22,
        ],
        [
            "squadraCasa" => "Trapani",
            "puntiCasa" => 40,
            "squadraOspite" => "Siracusa",
            "puntiOspite" => 30,
        ]
];

var_dump($partite);

for ($i; $i < count($struttura); $i++){
    $singoloAvvenimento = $struttura[$i];
}

var_dump($singoloAvvenimento);

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
    <div>
        <h1>Prima partita</h1>
        <h2>
            <?php echo $partite['squadraCasa'] ?>
        </h2>
        Vs
        <h2>
            <?php echo $partite['squadraOspite'] ?>
        </h2>
        <h3>
            Risultato: <?php echo $partite['puntiCasa'] ?> - <?php echo $partite['puntiOspite'] ?>
        </h3>
    </div>
</body>
</html>