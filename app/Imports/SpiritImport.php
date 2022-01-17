<?php

namespace App\Imports;

use App\Models\Spirit;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SpiritImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    */
    public function model(array $row)
    {
        return new Spirit([
            'name' => $row['name'],
            'description' => $row['description'],
            'type' => $row['type'],
            'destillery' => $row['destillery'],
            'alc_percent' => $row['alc_percent'],
            'size' => $row['size'],
            'image' => $row['image']
        ]);
    }
}
