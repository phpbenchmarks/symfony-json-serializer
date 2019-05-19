#!/usr/bin/env bash

set -e

# --ansi to have colors when this script is called in PHP
composer install --no-dev --classmap-authoritative --ansi
