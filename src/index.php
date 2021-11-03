<?php

//composer require phpoffice/phpspreadsheet
//Terminálban ezzel a paranccsal excel fájlokat tudunk kezelni php-ban

use Marcell\ComposerElso\User;

//Bármilyen osztályra hivatkozunk, a composer meg fogja találni
require "../vendor/autoload.php";

//Ha nincs use Marcell\...
//akkor $user = new Marcell\ComposerElso\User(); -> így kéne User-t létrehozni

$user = new User();
$user -> kiir();
$user -> newPet() -> roar();