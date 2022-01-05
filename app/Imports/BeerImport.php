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
            'type' => $row[2],
            'brewery' => $row[3],
            'alc_percent' => $row[4],
            'IBU' => $row[5],
            'size' => $row[6],
            'filename' => $row[7]
        ]);
    }
}
