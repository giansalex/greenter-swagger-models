<?php

use Giansalex\PhpObject\Swagger;
use Symfony\Component\Yaml\Yaml;

require 'vendor/autoload.php';

$classes = [
    \Greenter\Model\Sale\Invoice::class,
    \Greenter\Model\Sale\Note::class,
    \Greenter\Model\Summary\Summary::class,
    \Greenter\Model\Voided\Voided::class,
    \Greenter\Model\Voided\Reversion::class,
    \Greenter\Model\Perception\Perception::class,
    \Greenter\Model\Retention\Retention::class,
    \Greenter\Model\Despatch\Despatch::class,

    \Greenter\Model\Response\BillResult::class,
    \Greenter\Model\Response\SummaryResult::class,
    \Greenter\Model\Response\StatusResult::class,

];

$swagger = new Swagger();
$result = $swagger->fromClasses($classes);

$yaml = Yaml::dump($result, 6);

$filename = __DIR__.'/swagger.yaml';
file_put_contents($filename, $yaml);

echo 'Result in: '.$filename.PHP_EOL;