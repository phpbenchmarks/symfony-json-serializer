<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com?

You will find lot of benchmarks for PHP frameworks, template engines and JSON serializers on [phpbenchmarks.com](http://www.phpbenchmarks.com).

Benchmarks results are available for Apache Bench and Siege, and PHP 5.6 to 7.3.

Our benchmarking protocol is available on [benchmarking protocol page](http://www.phpbenchmarks.com/en/documentation/benchmarking-protocol).

## What is this repository?

It contains Symfony serializer installation `only`.
To reuse code between minor versions, features for benchmarks are not coded in this repository
but in [phpbenchmarks/symfony-serializer-common](https://github.com/phpbenchmarks/symfony-serializer-common) repository.

Switch branch to select version and benchmark you want to see.

## Benchmarks

You can find Symfony serializer 4.2 benchmarks results on
[benchmarks results page](http://www.phpbenchmarks.com/en/benchmark/symfony-json-serializer/4.2).

See all Symfony serializer benchmarked versions on [select version page](http://www.phpbenchmarks.com/en/benchmark/symfony-json-serializer/version).

## Community

Go to [community page](http://www.phpbenchmarks.com/en/community) to see the Hall of fame, or download the benchmark kit to add your code!

## How version works?

We do not follow semantic version for this repository. Here is an explanation about our versioning system:

`W` Symfony serializer major version.

`X` Symfony serializer minor version.

`Y` Symfony serializer bugfix version.

`Z` Benchmark type: `6` JSON serialization of Hello world, `7` Small JSON serialization, `8` Big JSON serialization.
