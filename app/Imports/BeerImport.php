<?php

namespace App\Imports;

use App\Models\Beer;
use Maatwebsite\Excel\Concerns\ToModel;

class BeerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Beer([
            'name' => $row[0],
            'description' => $row[1],
            'filename' => $row[2],
            'type' => $row[3],
            'brewery' => $row[4]
        ]);
    }
}
