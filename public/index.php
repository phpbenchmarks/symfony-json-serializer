<?php

declare(strict_types=1);

require(__DIR__ . '/../vendor/autoload.php');

use PhpBenchmarks\BenchmarkJsonSerializationBigOverload\BenchmarkService;
use Symfony\Component\Serializer\{
    Encoder\JsonEncoder,
    Serializer
};
use PhpBenchmarks\SymfonyJsonSerializer\Normalizer\ObjectToSerializeNormalizer;

$normalizers = [];
for ($i = 1; $i <= 999; $i++) {
    $class = "PhpBenchmarks\\SymfonyJsonSerializer\\Normalizer\\OverloadNormalizer$i";
    $normalizers[] = new $class();
}
$normalizers[] = new ObjectToSerializeNormalizer();

$serializer = new Serializer($normalizers, [new JsonEncoder()]);
$benchmarkService = new BenchmarkService();

if ($benchmarkService->isWriteToResponseBody()) {
    echo $serializer->serialize($benchmarkService->getDataToSerialize(), 'json');
} else {
    $serializer->serialize($benchmarkService->getDataToSerialize(), 'json');
}
