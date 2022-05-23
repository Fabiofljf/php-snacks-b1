<!-- 
    ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<?php

// Creo un'array con le info richieste:

$classe60 = 
    [
        [
            "nome" => "Alfredo",
            "cognome" => "Rossi",
            "media" => 25
        ],
        [
            "nome" => "Gino",
            "cognome" => "Bianchi",
            "media" => 27
        ],
        [
            "nome" => "Maria",
            "cognome" => "Verdi",
            "media" => 29
        ],
        [
            "nome" => "Federica",
            "cognome" => "Gialli",
            "media" => 28
        ]
    ];
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
    <h1>Classe 60: Nomi, cognomi e media dei voti</h1>
    <?php for ($i = 0; $i < count($classe60); $i++) { ?>
    
        <p><?php echo $classe60[$i]['nome'] ?>, <?php echo $classe60[$i]['cognome'] ?> | <?php echo $classe60[$i]['media'] ?></p>
        
    <?php } ?>
</body>
</html>