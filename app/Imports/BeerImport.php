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
            'name' => $row['name'],
            'description' => $row['description'],
            'type' => $row['type'],
            'brewery' => $row['brewery'],
            'alc_percent' => $row['alc_percent'],
            'IBU' => $row['IBU'],
            'size' => $row['size'],
            'filename' => $row['filename']
        ]);
    }
}
