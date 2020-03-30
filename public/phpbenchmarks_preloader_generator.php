<?php

require('/var/www/phpbenchmarks/project/generator/var/generator/5e81fc06e2993/generated/public/index.php');

$vendorDir = '/var/www/phpbenchmarks/project/generator/var/cache/dev/../../generator/5e81fc06e2993/generated/vendor';
DarkGhostHunter\Preloader\Preloader::make()
    ->selfExclude()
    ->writeTo('/var/www/phpbenchmarks/project/generator/var/cache/dev/../../generator/5e81fc06e2993/generated/.phpbenchmarks/php/7.4/preload.php');
