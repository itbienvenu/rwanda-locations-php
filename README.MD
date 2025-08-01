🇷🇼 Rwanda Locations PHP Library
A lightweight PHP library to get Rwanda's administrative regions, including provinces, districts, sectors, cells, and villages. Also supports searching villages by name.

📦 Installation
If using with Composer:
```
composer require your-vendor-name/rwanda-locations
```

### 🗂️ Namespace
All classes are under the namespace: \
``` RwandaLocations ``` 

✅ Example Usage
```
<?php

require 'vendor/autoload.php';

use RwandaLocations\Location;

$loc = new Location();

// List all provinces
print_r($loc->getProvinces());

// List districts under a province
print_r($loc->getDistricts("East"));

// List sectors under a district
print_r($loc->getSectors("East", "Bugesera"));

// List cells under a sector
print_r($loc->getCells("East", "Bugesera", "Gashora"));

// List villages under a cell
print_r($loc->getVillages("East", "Bugesera", "Gashora", "Biryogo"));

// Search any village by name
print_r($loc->searchVillage("Bidudu"));
```
### 📚 API Reference

Method	Description \
<b>getProvinces()</b>	Returns a list of all provinces in Rwanda \
<b>getDistricts($province)</b>	Returns districts under a given province
<b>getSectors($province, $district)</b>	Returns sectors in a given district
<b>getCells($province, $district, $sector)</b>	Returns cells under a sector \
<b>getVillages($province, $district, $sector, $cell)</b>	Returns villages under a cell
<b>searchVillage($villageName)</b>	Searches for a village by name and returns matching results (anywhere in Rwanda)

<i>⚠️ Notes
All names (province, district, etc.) are case-insensitive but must be spelled correctly.</i>

It is recommended to first list provinces, then drill down to avoid 
## 💡 Use Cases
<ul list-type='disk'>
<li>Address auto-fill forms</li>

<li>Administrative region selector</li>

<li>Data validation</li>

<li>Offline location picker</li>
</ul>

✅ License
MIT or your custom license.