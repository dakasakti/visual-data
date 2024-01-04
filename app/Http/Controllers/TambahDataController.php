<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;

class TambahDataController extends Controller
{



    public function tambahdata()
    {
        $data = Database::all();
        $orgCodes = $this->getOrgCodes($data);
    
        return view('database.tambahdata', [
            'data' => $data,
            'orgCodes' => $orgCodes,
            'title' => 'Create Data',
        ]);
    }
    
    private function getOrgCodes()
{
    $orgColumns = ['ORG_CODE', 'NAMA_CUSTOMER', 'KODE_PRODUK', 'AMMOUNT', 'HARGA_JUAL', 'TRX', 'TYPE_MITRA', 'AMMOUNT_FIX', 'PRODUK_FIX', 'BUCKET_NAME', 'Type_Produk', 'TYPE_BISNIS', 'REV_INPPN', 'PAJAK', 'REV_EXPPN', 'HPP', 'TOTAL_HPP_INPPN', 'TOTAL_HPP_EXPPN', 'Margin_INPPN', 'Margin_EXPPN', 'Hari', 'Bulan', 'KET_PROD'];

    $orgCodes = Database::pluck(...$orgColumns)->toArray();

    return $orgCodes;
}

    


    public function insertdata(Request $request)
    {
        $request->validate([
            'Tanggal' => 'required|date',
            'ORG_CODE' => 'required',
            'NAMA_CUSTOMER' => 'required',
            'KODE_PRODUK' => 'required',
            'AMMOUNT' => 'required',
            'HARGA_JUAL' => 'required',
            'TRX' => 'required',
            'TYPE_MITRA' => 'required',
            'AMMOUNT_FIX' => 'required',
            'PRODUK_FIX' => 'required',
            'BUCKET_NAME' => 'required',
            'Type_Produk' => 'required',
            'TYPE_BISNIS' => 'required',
            'REV_INPPN' => 'required',
            'PAJAK' => 'required',
            'REV_EXPPN'  => 'required',
            'HPP'      => 'required',
            'TOTAL_HPP_INPPN' => 'required',
            'TOTAL_HPP_EXPPN' => 'required',
            'Margin_INPPN'  => 'required',
            'Margin_EXPPN'   => 'required',
            'Hari'      => 'required',
            'Bulan' => 'required',
            'KET_PROD' => 'required',


        ]);
        Database::create($request->all());
        return redirect()->route('database')->with('succsess', 'Data Berhasil Ditambahkan');
    }
}
