<?php
/**
 * Created by PhpStorm.
 * User: seb
 * Date: 28/09/18
 * Time: 11:40
  */
require '../vendor/autoload.php';

$toto = new App\wcs\hello;

echo $toto->talk();

 echo '<br/>';

$tata = new HelloWorld\SayHello;

echo $tata->world();
