<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ImportAll implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            1 => new BreweryImport(),
            0 => new BeerImport(),
            3 => new DestilleryImport(),
            2 => new SpiritImport()
        ];
    }
}
