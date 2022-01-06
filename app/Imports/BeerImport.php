<?php

namespace App\Imports;

use App\Models\Beer;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BeerImport implements ToModel, WithHeadingRow, SkipsEmptyRows
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
            'ibu' => $row['ibu'],
            'size' => $row['size'],
            'image' => $row['image'],
            'beer_of_the_day' => $row['beer_of_the_day'],
        ]);
    }
}
