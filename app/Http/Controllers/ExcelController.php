<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\DatabaseExport;
use App\Imports\DatabaseImport;
use App\Models\Database;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;


class ExcelController extends Controller
{

    public function import(Request $request)
    {
        // jadi tabel hpp itu required nya harus diisi tapi karna ga semuanya punya value harus nambahin ini
        // ALTER TABLE `databases` MODIFY HPP DECIMAL(10, 2) DEFAULT 0.00;
        $request->validate([
            'excel_file' => 'required|mimes:xlsx|max:10240', 
        ]);

        // Proses impor menggunakan Excel facade
        Excel::import(new DatabaseImport(), $request->file('excel_file'));

        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->route('database')->with('success', 'Data berhasil diimport.');
    }




    public function export(Request $request)
    {
        $filterNama = $request->filter_export;
        $nama_customer = 'NAMA_CUSTOMER';
        $data = Database::when($filterNama, function ($query) use ($filterNama) {
            return $query->where('NAMA_CUSTOMER', 'LIKE', '%' . $filterNama . '%');
        })->get();

        try {
            // nah ini try gunanya buat nyoba eksekusi kode kalo bakal error
            // kalo ga error lanjut deh ke bawah :v.

            // nah di ntar di bladenya ada 2 tipenya 
            $nama_customer_slug = Str::slug($nama_customer);
            $exportType = $request->export_type;
            $filename = 'data_export'.$nama_customer_slug;

            if ($exportType == 'summary') {
                $filename .= '_summary';
                // Ambil dua kolom yang yang dimau
                $data = $data->map(function ($item) {
                    return [
                        'Tanggal' => $item->Tanggal,
                        'NAMA_CUSTOMER' => $item->NAMA_CUSTOMER,
                    ];
                });
            } else {
                $filename .= '_semua';
                // Ambil semua kolom
            }

            $filename .= '.xlsx';

         
            return Excel::download(new DatabaseExport($data), $filename);
        } catch (\Exception $e) {


            return redirect()->back()->with('gagal_ekspor', 'Gagal melakukan ekspor data. Error: ' . $e->getMessage());
        }
    }
}
