<?php

require 'vendor/autoload.php';

use RwandaLocations\Location;

$loc = new Location();

print_r($loc->getProvinces());
print_r($loc->getDistricts("East"));
print_r($loc->getSectors("East", "Bugesera"));
print_r($loc->getCells("East", "Bugesera", "Gashora"));
print_r($loc->getVillages("East", "Bugesera", "Gashora", "Biryogo"));

print_r($loc->searchVillage("Bidudu"));  // Search village anywhere
