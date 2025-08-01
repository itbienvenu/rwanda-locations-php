<?php

namespace RwandaLocations;

class Location
{
    private $locations;

    public function __construct()
    {
        $jsonPath = __DIR__ . '/data/locations.json';
        $this->locations = json_decode(file_get_contents($jsonPath), true);
    }

    public function getProvinces(): array
    {
        return array_keys($this->locations);
    }

    public function getDistricts(string $province): array
    {
        return array_key_exists($province, $this->locations)
            ? array_keys($this->locations[$province])
            : [];
    }

    public function getSectors(string $province, string $district): array
    {
        return isset($this->locations[$province][$district])
            ? array_keys($this->locations[$province][$district])
            : [];
    }

    public function getCells(string $province, string $district, string $sector): array
    {
        return isset($this->locations[$province][$district][$sector])
            ? array_keys($this->locations[$province][$district][$sector])
            : [];
    }

    public function getVillages(string $province, string $district, string $sector, string $cell): array
    {
        return $this->locations[$province][$district][$sector][$cell] ?? [];
    }

    public function searchVillage(string $villageName): array
    {
        $results = [];

        foreach ($this->locations as $province => $districts) {
            foreach ($districts as $district => $sectors) {
                foreach ($sectors as $sector => $cells) {
                    foreach ($cells as $cell => $villages) {
                        foreach ($villages as $village) {
                            if (stripos($village, $villageName) !== false) {
                                $results[] = [
                                    'province' => $province,
                                    'district' => $district,
                                    'sector' => $sector,
                                    'cell' => $cell,
                                    'village' => $village
                                ];
                            }
                        }
                    }
                }
            }
        }

        return $results;
    }
}
