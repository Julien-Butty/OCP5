<?php
namespace App;

use App\Framework\Routeur;

require "Autoloader.php";


Autoloader::register();
$routeur = new Routeur();
$routeur->routerRequete();
