<!-- 
 ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.   
-->

<?php
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, maiores rem! Odio officiis, earum quidem aspernatur fugiat optio perspiciatis sed minus itaque deleniti rerum et non dolores distinctio nihil! Fugiat officia obcaecati cupiditate fugit commodi enim eos laudantium. Obcaecati alias iusto cumque, consequuntur architecto magnam cupiditate doloremque animi deserunt distinctio at atque, maxime temporibus quos vel similique sunt optio mollitia. Officia cupiditate quisquam ipsa, quam, omnis earum voluptatem veniam enim sint aut distinctio numquam esse animi aspernatur eaque rem libero molestiae alias dicta provident, impedit ipsum architecto. At tempora adipisci mollitia saepe alias id beatae cumque, culpa iure exercitationem architecto quidem amet ipsum perferendis eligendi explicabo praesentium nihil omnis magnam perspiciatis odit. Accusantium incidunt itaque distinctio fuga dicta, quod minima rerum molestias modi nemo, a quibusdam repellendus soluta error suscipit atque at, obcaecati repudiandae minus repellat veritatis eligendi molestiae? Dolorum ullam facere ipsam. Totam dolore nihil officia, ut, neque blanditiis corrupti molestias, maiores laudantium consectetur itaque! At libero nostrum perspiciatis odio aliquam saepe et ratione odit ut ipsam culpa quasi, possimus, laudantium quod eveniet quibusdam distinctio. Est facere cumque saepe ab illo dolorum, velit ratione, corrupti voluptatibus, adipisci dolore repellendus labore et enim molestiae? Rem molestiae repellendus nostrum corrupti quis?';

// provo a generare una funzione per generare un'array con questo testo.

$arrayEsploso = explode('.', $text);

var_dump($arrayEsploso);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
</head>
<body>
    
    <?php foreach($arrayEsploso as $p) :?>
        <p> <?= $p ?></p>
    <?php endforeach; ?>

</body>
</html>