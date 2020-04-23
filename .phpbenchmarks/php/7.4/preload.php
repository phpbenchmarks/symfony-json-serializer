<?php

$sourceCodePath = __DIR__ . '/../../../';
$files = [
    "$sourceCodePath/public/index.php",
    "$sourceCodePath/vendor/autoload.php",
    "$sourceCodePath/vendor/composer/ClassLoader.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-json-serialization-hello-world/src/BenchmarkService.php",
    "$sourceCodePath/vendor/symfony/polyfill-ctype/bootstrap.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/ChainDecoder.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/ChainEncoder.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/DecoderInterface.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/EncoderInterface.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/JsonDecode.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/JsonEncode.php",
    "$sourceCodePath/vendor/symfony/serializer/Encoder/JsonEncoder.php",
    "$sourceCodePath/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php",
    "$sourceCodePath/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php",
    "$sourceCodePath/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php",
    "$sourceCodePath/vendor/symfony/serializer/Normalizer/NormalizerInterface.php",
    "$sourceCodePath/vendor/symfony/serializer/Serializer.php",
    "$sourceCodePath/vendor/symfony/serializer/SerializerInterface.php",
];

foreach ($files as $file) {
    if (is_readable($file) === false) {
        throw new \Exception('File "' . $file . '" is not readable.');
    }

    opcache_compile_file($file);
}
