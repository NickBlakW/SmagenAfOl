<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ImportAll implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            2 => new Beer_typeImport(),
            1 => new BreweryImport(),
            0 => new BeerImport(),
            5 => new SpiritTypeImport(),
            4 => new DestilleryImport(),
            3 => new SpiritImport()
        ];
    }
}
