# TASK 3

**Language:** PHP

**Description:**

Suppose you have:

 * a `haversine(lat1, lng1, lat2, lng2)` function that returns the distance (measured in km) between the coordinates of two given geographic point (`lat` and `lng` are latitude and longitude)
 * an array of geographical zones (`locations`):
```
 locations = [
   {'id': 1000, 'zip_code': '37069', 'lat': 45.35, 'lng': 10.84},
   {'id': 1001, 'zip_code': '37121', 'lat': 45.44, 'lng': 10.99},
   {'id': 1001, 'zip_code': '37129', 'lat': 45.44, 'lng': 11.00},
   {'id': 1001, 'zip_code': '37133', 'lat': 45.43, 'lng': 11.02},
   ... 
];
```
 * an array of shoppers:
```
shoppers = [
 {'id': 'S1', 'lat': 45.46, 'lng': 11.03, 'enabled': true},
 {'id': 'S2', 'lat': 45.46, 'lng': 10.12, 'enabled': true},
 {'id': 'S3', 'lat': 45.34, 'lng': 10.81, 'enabled': true},
 {'id': 'S4', 'lat': 45.76, 'lng': 10.57, 'enabled': true},
 {'id': 'S5', 'lat': 45.34, 'lng': 10.63, 'enabled': true},
 {'id': 'S6', 'lat': 45.42, 'lng': 10.81, 'enabled': true},
 {'id': 'S7', 'lat': 45.34, 'lng': 10.94, 'enabled': true},
];
```

The goal is to calculate the percentage of the zone covered by enabled shoppers (`coverage`). One shopper covers a zone if the distance among the coordinates is less than 10 km.

Resulted array should be sorted (desc) as the following one:

```
sorted = [
 {shopper_id': 'S3', 'coverage': 72},
 {shopper_id': 'S1', 'coverage': 43},
 {shopper_id': 'S6', 'coverage': 12},
];
```

**How to submit:**

Complete the source code file named `haversine_coverage.php`.

## Requirements

 * Docker & Docker Compose
 * PHP 7.2

## How to run it

In order to make the things easier the project is provided with a Docker container it can be started with the following command:

```
docker-compose up
```

Otherwise, in case you don't have docker (nor docker-compose) installed, you can run the following command to build the project first and  then execute the required script.

```
php haversine_coverage.php
```

## Additional information

For this test I've chosen a quick & dirty approach.

