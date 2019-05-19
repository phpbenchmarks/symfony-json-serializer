<?php

declare(strict_types=1);

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType(): int
    {
        return 4;
    }

    public static function getComponentName(): string
    {
        return 'Symfony serializer';
    }

    public static function getComponentSlug(): string
    {
        return 'symfony-json-serializer';
    }

    public static function isPhp56Enabled(): bool
    {
        return false;
    }

    public static function isPhp70Enabled(): bool
    {
        return false;
    }

    public static function isPhp71Enabled(): bool
    {
        return true;
    }

    public static function isPhp72Enabled(): bool
    {
        return true;
    }

    public static function isPhp73Enabled(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return 'index.php';
    }

    public static function getCoreDependencyName(): string
    {
        return 'symfony/serializer';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 4;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 2;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 8;
    }

    public static function getBenchmarkType(): int
    {
        return 8;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'jsonSerialization' => 'https://github.com/phpbenchmarks/symfony-serializer-common/blob/4.8.0/src/benchmark.php#L21',
            'integerSerialization' => 'https://github.com/phpbenchmarks/symfony-serializer-common/blob/4.8.0/src/benchmark.php#L21',
            'floatSerialization' => 'https://github.com/phpbenchmarks/symfony-serializer-common/blob/4.8.0/src/benchmark.php#L21',
            'stringSerialization' => 'https://github.com/phpbenchmarks/symfony-serializer-common/blob/4.8.0/src/benchmark.php#L21',
            'booleanSerialization' => 'https://github.com/phpbenchmarks/symfony-serializer-common/blob/4.8.0/src/benchmark.php#L21',
            'nullSerialization' => 'https://github.com/phpbenchmarks/symfony-serializer-common/blob/4.8.0/src/benchmark.php#L21',
            'arraySerialization' => 'https://github.com/phpbenchmarks/symfony-serializer-common/blob/4.8.0/src/benchmark.php#L21',
            'objectSerialization' => 'https://github.com/phpbenchmarks/symfony-serializer-common/blob/4.8.0/src/Normalizer/ObjectToSerializeNormalizer.php#L16',
            'customSerializers' => 'https://github.com/phpbenchmarks/symfony-serializer-common/tree/4.8.0/src/Normalizer'
        ];
    }
}
