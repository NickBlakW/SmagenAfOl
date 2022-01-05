<?php

namespace App\Imports;

use App\Models\Brewery;
use Maatwebsite\Excel\Concerns\ToModel;

class BreweryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Brewery([
            'name' => $row[0],
            'description' => $row[1]
        ]);
    }
}
