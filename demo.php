<?php

include_once 'geohash.class.php';

$length = 6;

$geohash = new Geohash();

$hash = substr($geohash->encode('latitude','longitude'), 0, $length);

$box = $geohash->neighbors($hash);

$box[] = $hash;


$in_str = "'".implode("','", $box)."'";

// PHP
// $sql = "SELECT FROM `table` WHERE LEFT(geohash, {$length}) IN ($in_str)";

// OUTPUT
// SELECT FROM `table` WHERE LEFT(geohash, 6) IN ('xxxxxx','aaaaaa', ......)
