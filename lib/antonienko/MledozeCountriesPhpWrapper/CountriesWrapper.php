<?php
namespace antonienko\MledozeCountriesPhpWrapper;

class CountriesWrapper
{
    private $jsonData;
    public function __construct($jsonToLoad = null)
    {
        $this->jsonData = json_decode($jsonToLoad ? $jsonToLoad : file_get_contents(__DIR__.'/../../../vendor/mledoze/countries/dist/countries.json'));
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