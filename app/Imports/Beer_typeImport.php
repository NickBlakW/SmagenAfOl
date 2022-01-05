<?php

namespace App\Imports;

use App\Models\Beer_type;
use Maatwebsite\Excel\Concerns\ToModel;

class Beer_typeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Beer_type([
            'type' => $row[0]
        ]);
    }
}
