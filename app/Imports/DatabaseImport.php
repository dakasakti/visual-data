<?php

namespace App\Imports;

use App\Models\Database;
use Maatwebsite\Excel\Concerns\ToModel;

class DatabaseImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Database([
            'Tanggal' => $row[1],
            'ORG_CODE' => $row[2],
            'NAMA_CUSTOMER' => $row[3],
            'KODE_PRODUK' => $row[4],
            'AMMOUNT'=> $row[5],
            'HARGA_JUAL' => $row[6],
            'TRX' => $row[7],
            'TYPE_MITRA' => $row[8],
            'AMMOUNT_FIX' => $row[9],
            'PRODUK_FIX' => $row[10],
            'BUCKET_NAME' => $row[11],
            'Type_Produk' => $row[12],
            'TYPE_BISNIS' => $row[13],
            'REV_INPPN' => $row[14],
            'PAJAK' => $row[15],
            'REV_EXPPN' => $row[16],
            'TOTAL_HPP_INPPN' => $row[17],
            'TOTAL_HPP_EXPPN' => $row[18],
            'Margin_INPPN' => $row[19],
            'Margin_EXPPN' => $row[20],
            'Hari' => $row[21],
            'Bulan' => $row[22],
            'KET_PROD' => $row[23],

        ]);
    }
}
