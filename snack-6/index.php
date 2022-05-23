<!-- 
## Snack 6

Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
-->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
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

    <?php foreach ($db as $roules => $information) : ?>
        <div style="background-color:<?= ($roules === 'teachers') ? 'grey' : 'green' ?>">
            <h2> <?php echo $roules ?> </h2>
            <?php foreach ($information as $info) : ?>
                <p><?= $info['name'] ?> <?= $info['lastname'] ?></p>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

</body>

</html>