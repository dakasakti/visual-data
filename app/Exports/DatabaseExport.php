<?php

namespace App\Exports;

use App\Models\Database;
use Maatwebsite\Excel\Concerns\FromCollection;

class DatabaseExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Database::all();
        
    }
}
