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

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');