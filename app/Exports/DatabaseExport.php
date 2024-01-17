<?php

namespace App\Exports;

use App\Models\Database; 
use Maatwebsite\Excel\Concerns\FromCollection;

class DatabaseExport implements FromCollection
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
    }
}