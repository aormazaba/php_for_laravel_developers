<!--AQUEST EMBOLIC ES DIU SPAGHETTI CODE, PERÒ HO FAIG PER A PRACTICAR-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--Separation of concerns -> Separar coses diferents o concerns-->

    <?php
echo 'Hola món desde index';
// desde el navegador no es mostra el codi font php
// el navegador interpreta el que troba dintre el echo
echo '<h1> Hola món dintre h1 I DINTRE HTML I DINTRE PHP </h1>';
// si  fem un index.html i posem comandes php...les interpreta com text
    ?>


</body>
</html>

<!--UN ALTRE PHP-->
<!--AQUESTES LÍNIES SÓN LES QUE UTILITZEM INICIALMENT FORA DEL  HTML-->
<?php

echo 'Hola món desde index';

// desde el navegador no es mostra el codi font php

// el navegador interpreta el que troba dintre el echo
echo '<h1> Hola món dintre h1 PERÒ FORA DE HTML </h1>';
// si  fem un index.html i posem comandes php...les interpreta com text
