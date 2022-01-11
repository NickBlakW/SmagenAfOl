<?php

namespace App\Imports;

use App\Models\Destillery;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DestilleryImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{

    public function model(array $row)
    {
        return new Destillery([
            'name' => $row['name'],
            'description' => $row['description']
        ]);
    }
}
