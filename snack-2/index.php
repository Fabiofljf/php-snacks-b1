<!-- 
    ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<!-- 
1. Passo i parametri con il GET  
-->

<?php
$name = $_GET['name']; # Salvo il dato (nome) inserito dall'utente in una variabile.
$mail = $_GET['email']; # Salvo il dato (email) inserito dall'utente in una variabile.
$age = $_GET['age']; # Salvo il dato (anni) inserito dall'utente in una variabile.

var_dump($_GET); // - Passo i parametri con il GET 

// - La funzione strlen mi permette di contare quanti caratteri ha una stringa.
$lunghezzaNome = strlen($name);
var_dump($lunghezzaNome);
// - La funzione strpos mi permette di verificare una parola in una stringa.
// - La funzione ctype_digit mi permette di verificare se in una stringa ci sono numeri o lettere.


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
        <?php if (($lunghezzaNome > 3) && strpos($mail, '@') && ctype_digit($age)) : ?> 

            <p>Ok. Il tuo accesso alla piattaforma è confermato!</p>

        <?php else : ?>

            <p>Mi dispiace i dati inseriti non sono corretti, riprova.</p>

        <?php endif; ?>
  

    </body>
</html>