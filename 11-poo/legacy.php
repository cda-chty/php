<?php

require 'vendor/autoload.php';

use App\Legacy\Animal;
use App\Legacy\Cat;
use App\Legacy\Dog;

$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();

$catA = new Cat("O'malley");
$dogA = new Dog('Pongo');

dump($catA, $dogA);
// instanceof
// (Polymorphisme => Le chat est aussi un animal)
dump($catA instanceof Animal);

echo $catA->move().'<br>';
echo $dogA->move().'<br>';
