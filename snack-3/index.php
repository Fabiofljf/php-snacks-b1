<!-- 
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

<?php
# Come genero in php un numero casuale? --> con RAND()
// $numeroRandom = rand(1, 50);
// var_dump($numeroRandom);

# Mi creo un'array vuota dove inserirò i miei numeri:
$new_array = [];
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
        <p>Creo un'array con 15 numeri diversi casuali</p>

        <?php 
            while (count($new_array) < 15) { 
                $numeroRandom = rand(1, 50);
                    if(!in_array($numeroRandom, $new_array)){
                        $new_array[] = $numeroRandom;
                    }
                return $new_array;
            };
        ?>

        <p>
            <?php echo $new_array ?>
        </p>

    </body>
</html>