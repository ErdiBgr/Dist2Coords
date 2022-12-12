<?php

function dist2coords($lat1, $lon1, $lat2, $lon2) {
    $R = 6371; //Earth radius (km)
    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);
    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon/2) * sin($dLon/2);
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    $distance = $R * $c; // Distance in kilometers between two coordinates.
    $time = $distance / 75; //Calculated time (in hours) assuming a car travels at 75km/h.
    return array('distance' => $distance, 'time' => $time);
}
