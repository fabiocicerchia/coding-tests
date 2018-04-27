<?php

function haversine($lat_1, $lng_1, $lat_2, $lng_2) {

    // convert from degrees to radians
    $lat_from = deg2rad($lat_1);
    $lng_from = deg2rad($lng_1);
    $lat_to = deg2rad($lat_2);
    $lng_to = deg2rad($lng_2);

    $lat_delta = $lat_to - $lat_from;
    $lng_delta = $lng_to - $lng_from;

    $angle = 2 * asin(sqrt(pow(sin($lat_delta / 2), 2) +
        cos($lat_from) * cos($lat_to) * pow(sin($lng_delta / 2), 2)));
    return $angle * 6371;
};

$locations = [
    [ 'id' => 1000, 'zip_code' => '37069', 'lat' => 45.35525460, 'lng' => 10.84742670 ],
    [ 'id' => 1001, 'zip_code' => '37121', 'lat' => 45.44350560, 'lng' => 10.99914590 ],
    [ 'id' => 1001, 'zip_code' => '37129', 'lat' => 45.44075620, 'lng' => 11.00529750 ],
    [ 'id' => 1001, 'zip_code' => '37133', 'lat' => 45.43309360, 'lng' => 11.02006750 ],
    [ 'id' => 1001, 'zip_code' => '37047', 'lat' => 45.39537130, 'lng' => 11.27420020 ],
    [ 'id' => 1001, 'zip_code' => '37057', 'lat' => 45.38236580, 'lng' => 11.04449050 ],
    [ 'id' => 1001, 'zip_code' => '37059', 'lat' => 45.37170160, 'lng' => 11.13354910 ],
    [ 'id' => 1001, 'zip_code' => '37036', 'lat' => 45.42318000, 'lng' => 11.09429100 ],
    [ 'id' => 1001, 'zip_code' => '37012', 'lat' => 45.47325370, 'lng' => 10.85072770 ],
    [ 'id' => 1001, 'zip_code' => '37141', 'lat' => 45.45877110, 'lng' => 11.06454120 ],
    [ 'id' => 1001, 'zip_code' => '37066', 'lat' => 45.40282050, 'lng' => 10.84281000 ],
];

$shoppers = [
    [ 'id' => 'S1', 'lat' => 45.46278030, 'lng' => 10.54658710, 'enabled' => true ],
    [ 'id' => 'S2', 'lat' => 45.46095850, 'lng' => 10.12532454, 'enabled' => true ],
    [ 'id' => 'S3', 'lat' => 45.34549960, 'lng' => 10.81326476, 'enabled' => true ],
    [ 'id' => 'S4', 'lat' => 45.12648000, 'lng' => 10.57868138, 'enabled' => true ],
    [ 'id' => 'S5', 'lat' => 45.25533000, 'lng' => 10.63418757, 'enabled' => true ],
    [ 'id' => 'S6', 'lat' => 45.42912200, 'lng' => 10.81362547, 'enabled' => true ],
    [ 'id' => 'S7', 'lat' => 45.04214300, 'lng' => 10.94632617, 'enabled' => true ],
];

$sorted = [];

$numberOfLocations = count($locations);
foreach ($shoppers as &$shopper) {
    $coverage = 0;

    foreach ($locations as $location) {
        $distance = haversine($shopper['lat'], $shopper['lng'], $location['lat'], $location['lng']);
        if ($distance < 10) {
            $coverage++;
        }
    }

    $shopperCoverage = 100 / $numberOfLocations * $coverage;
    if ($shopperCoverage > 0) {
        $sorted[$shopper['id']] = [
            'shopper_id' => $shopper['id'],
            'coverage'   => $shopperCoverage,
        ];
    }
}

// Since the spaceship operator orders ascending, by multipling by -1 I get a reversed sorting.
usort($sorted, function ($a, $b) {
    return ($a['coverage'] <=> $b['coverage']) * -1;
});

var_dump($sorted);
