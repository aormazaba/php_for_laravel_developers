<?php

//QUERY STRING
$_GET;
//podem mostrar-lo amb var_dump ($_GET); és com un echo però ens mostra l'array


//$name = 'Albert';

//$greeting = "Hola ${name}!";
//$greeting = 'Hola ' . ${name}.' !!';

//podem utilitzar la info que ens introdueix l'usuari al navegador : http://localhost:8000/index.php?name=Pepet

//$greeting= 'Hola ' .$_GET['name']. ' !!';

//$name2 = $_GET['name'];
//$surname2 = $_GET['surname'];

//$greeting = "Hola $name2 $surname2 !!";
//http://localhost:8000/index.php?name=Pepet&surname=Marieta

//Exemple de fer una funció:

function greet() {
    $name2 = htmlspecialchars($_GET['name']);
    $surname2 = htmlspecialchars($_GET['surname']);

    return  "Hola $name2 $surname2 desde la funció!!";
}
$greeting = greet();