<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';
require_once dirname(__FILE__) . '/vendor/weathermap/core/lib/all.php';

use Weathermap\Core\Map;

$map = new Map();

$map->readConfig("test.conf");

print($map->getConfig());
