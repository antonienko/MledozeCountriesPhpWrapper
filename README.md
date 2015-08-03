# MledozeCountriesPhpWrapper

Wrapper around the json data of the [countries data library by mledoze](https://github.com/mledoze/countries)

##Installation
###Composer
This library is available in packagist.org, you can add it to your project via Composer.

In the "require" section of your composer.json file:

Always up to date (bleeding edge, API *not* guaranteed stable)
```javascript
"antonienko/mledoze-countries-phpwrapper": "dev-master"
```

Specific minor version, API stability
```javascript
"antonienko/mledoze-countries-phpwrapper": "1.0.*"
```

##Sample Usage
```php
use antonienko\MledozeCountriesPhpWrapper\CountriesWrapper;

$country_data_service = new CountriesWrapper();
$country_list = $country_data_service->countryList();
```

##License Information
Licensed under __The MIT License (MIT)__. See the LICENSE file for more details.
