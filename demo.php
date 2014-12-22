<?php

include_once 'geohash.class.php';

$length = 6;

$geohash = new Geohash();

$hash = $geohash->encode('latitude','longtitude');

$box = $geohash->neighbors(substr($hash,0,$length));

$box[] = substr($hash,0,$length);


$in_str = "'".implode("','", $box)."'";

// PHP
// $sql = "SELECT FROM `table` WHERE LEFT(geohash, {$length}) IN ($in_str)";

// OUTPUT
// SELECT FROM `table` WHERE LEFT(geohash, 6) IN ('xxxxxx','aaaaaa', ......)
