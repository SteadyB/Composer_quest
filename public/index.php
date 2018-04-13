<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 12/04/18
 * Time: 17:47
 */
require __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;
/* Instancing object */
$hello = new Hello();
$helloWorld = new SayHello();

/* RETURN */
echo "Using <strong>H</strong>eloWorld STATIC : " . sayHello::world() . "<br><br>";
echo "Using <strong>h</strong>elloWorld OBJECT : " .  $helloWorld->world() . "<br><br>";
echo "Using <strong>hello</strong> OBJECT : " . $hello->talk() . "<br><br>";
