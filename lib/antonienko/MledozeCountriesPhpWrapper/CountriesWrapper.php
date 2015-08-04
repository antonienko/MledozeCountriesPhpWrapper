<?php
namespace antonienko\MledozeCountriesPhpWrapper;

class CountriesWrapper
{
    private $jsonData;
    public function __construct($jsonToLoad)
    {
        $this->jsonData = json_decode($jsonToLoad);
    }

    public function countryList()
    {
        $result = [];
        foreach ($this->jsonData as $country) {
            $result[] = $country->name->common;
        }
        return $result;
    }
}