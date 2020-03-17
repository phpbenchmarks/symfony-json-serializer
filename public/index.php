<?php

declare(strict_types=1);

require(__DIR__ . '/../vendor/autoload.php');

use PhpBenchmarks\BenchmarkJsonSerializationHelloWorld\BenchmarkService;
use Symfony\Component\Serializer\{
    Encoder\JsonEncoder,
    Serializer
};

$serializer = new Serializer([], [new JsonEncoder()]);

if (BenchmarkService::isWriteToResponseBody()) {
    echo $serializer->serialize(BenchmarkService::getDataToSerialize(), 'json');
} else {
    $serializer->serialize(BenchmarkService::getDataToSerialize(), 'json');
}
