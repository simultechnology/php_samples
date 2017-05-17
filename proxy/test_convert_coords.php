<?php
/**
 * Created by IntelliJ IDEA.
 * User: t_ishikawa
 * Date: 2017/05/17
 * Time: 16:29
 */

include("vendor/autoload.php");

use proj4php\Proj4php;
use proj4php\Proj;
use proj4php\Point;

$xy = convert(15559062.855560768,4257848.2235974595);
$lonlat = $xy->toArray();
echo $lonlat[0] . ',' . $lonlat[1];


function convert($x, $y) {

// Initialise Proj4
    $proj4 = new Proj4php();

    $proj4->addDef("EPSG:4301", "+proj=longlat +ellps=bessel +towgs84=-146.414,507.337,680.507,0,0,0,0 +no_defs");

// Create two different projections.
    $projL3857    = new Proj('EPSG:3857', $proj4);
    $projWGS84  = new Proj('EPSG:4301', $proj4);

// Create a point.
    $pointSrc = new Point($x, $y, $projL3857);
    $pointDest = $proj4->transform($projWGS84, $pointSrc);
    return $pointDest;
    //echo "Conversion: " . $pointDest->toShortString() . " in WGS84<br><br>";
}
