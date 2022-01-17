<?php

namespace App\Imports;

use App\Models\SpiritType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SpiritTypeImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{

    public function model(array $row)
    {
        return new SpiritType([
            'type' => $row['type']
        ]);
    }
}
