<?php

require dirname(__DIR__).'/vendor/autoload.php';


$repository = new \PsalmTemplate\MyEntityRepository();
$entity = $repository->getOne();
$entity->bar();
