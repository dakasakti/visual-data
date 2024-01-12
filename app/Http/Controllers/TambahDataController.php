<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class TambahDataController extends Controller
{

    public function tampilkanCreateForm()
    {
        $dropdownData = $this->tambahdata();

        return view('database.tambahdata', [
            'dropdownData' => $dropdownData,
            'title' => 'Create Data',
        ]);
    }


    public function tambahdata()
    {
        $dropdownData['ORG_CODE'] = Database::select('ORG_CODE')->distinct()->pluck('ORG_CODE', 'ORG_CODE');
        $dropdownData['NAMA_CUSTOMER'] = Database::select('NAMA_CUSTOMER')->distinct()->pluck('NAMA_CUSTOMER', 'NAMA_CUSTOMER');
        $dropdownData['KODE_PRODUK'] = Database::select('KODE_PRODUK')->distinct()->pluck('KODE_PRODUK', 'KODE_PRODUK');
        $dropdownData['AMMOUNT'] = Database::select('AMMOUNT')->distinct()->pluck('AMMOUNT', 'AMMOUNT');
        $dropdownData['HARGA_JUAL'] = Database::select('HARGA_JUAL')->distinct()->pluck('HARGA_JUAL', 'HARGA_JUAL');
        $dropdownData['TRX'] = Database::select('TRX')->distinct()->pluck('TRX', 'TRX');
        $dropdownData['TYPE_MITRA'] = Database::select('TYPE_MITRA')->distinct()->pluck('TYPE_MITRA', 'TYPE_MITRA');
        $dropdownData['AMMOUNT_FIX'] = Database::select('AMMOUNT_FIX')->distinct()->pluck('AMMOUNT_FIX', 'AMMOUNT_FIX');
        $dropdownData['PRODUK_FIX'] = Database::select('PRODUK_FIX')->distinct()->pluck('PRODUK_FIX', 'PRODUK_FIX');
        $dropdownData['BUCKET_NAME'] = Database::select('BUCKET_NAME')->distinct()->pluck('BUCKET_NAME', 'BUCKET_NAME');
        $dropdownData['Type_Produk'] = Database::select('Type_Produk')->distinct()->pluck('Type_Produk', 'Type_Produk');
        $dropdownData['TYPE_BISNIS'] = Database::select('TYPE_BISNIS')->distinct()->pluck('TYPE_BISNIS', 'TYPE_BISNIS');
        $dropdownData['REV_INPPN'] = Database::select('REV_INPPN')->distinct()->pluck('REV_INPPN', 'REV_INPPN');
        $dropdownData['REV_EXPPN'] = Database::select('REV_EXPPN')->distinct()->pluck('REV_EXPPN', 'REV_EXPPN');
        $dropdownData['PAJAK'] = Database::select('PAJAK')->distinct()->pluck('PAJAK', 'PAJAK');
        $dropdownData['HPP'] = Database::select('HPP')->distinct()->pluck('HPP', 'HPP');
        $dropdownData['TOTAL_HPP_INPPN'] = Database::select('TOTAL_HPP_INPPN')->distinct()->pluck('TOTAL_HPP_INPPN', 'TOTAL_HPP_INPPN');
        $dropdownData['TOTAL_HPP_EXPPN'] = Database::select('TOTAL_HPP_EXPPN')->distinct()->pluck('TOTAL_HPP_EXPPN', 'TOTAL_HPP_EXPPN');
        $dropdownData['MARGIN_INPPN'] = Database::select('MARGIN_INPPN')->distinct()->pluck('MARGIN_INPPN', 'MARGIN_INPPN');
        $dropdownData['MARGIN_EXPPN'] = Database::select('MARGIN_EXPPN')->distinct()->pluck('MARGIN_EXPPN', 'MARGIN_EXPPN');
        $dropdownData['Hari'] = Database::select('Hari')->distinct()->pluck('Hari', 'Hari');
        $dropdownData['Bulan'] = Database::select('Bulan')->distinct()->pluck('Bulan', 'Bulan');
        $dropdownData['KET_PROD'] = Database::select('KET_PROD')->distinct()->pluck('KET_PROD', 'KET_PROD');

        return $dropdownData;
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
