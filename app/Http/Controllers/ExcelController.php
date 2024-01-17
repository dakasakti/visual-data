<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\DatabaseExport;
use App\Imports\DatabaseImport;
use App\Models\Database;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        $file = $request->file('excel_file');

        if ($file) {
        $fileName = $file->getClientOriginalName(); 
            $file->storeAs('data', $fileName);
            Excel::import(new DatabaseImport, storage_path('app/data/' . $fileName));
        
            return redirect()->route('database-import')->with('success', 'Data berhasil diimpor.');
        } else {
            return redirect()->route('database-import')->with('error', 'Gagal mengimpor data. Pastikan Anda telah memilih file Excel.');
        }
    }
        
    public function export(Request $request)
    {
        $data = Database::when($request->nama, function ($query) use ($request) {
            return $query->where('NAMA_CUSTOMER', $request->nama);
        })->get();

        return Excel::download(new DatabaseExport($data), 'data.xlsx');
    }
        


}
