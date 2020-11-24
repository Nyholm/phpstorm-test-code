<?php

require dirname(__DIR__).'/vendor/autoload.php';


$repository = new \PsalmTemplate\MyEntityRepository();

// PhpStorm 2020.3 Beta (Build #PS-203.5981.43, built on November 19, 2020) has
// no idea what $entity is.
$entity = $repository->getOne();
$entity->bar();
