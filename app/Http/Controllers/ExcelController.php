<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\DatabaseExport;
use App\Imports\DatabaseImport;
use App\Models\Database;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ExcelController extends Controller
{
    public function export()
    {
        return Excel::download(new DatabaseExport, 'data.xlsx');
    }
       
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
}
