<?php

namespace App\Http\Controllers;
use App\Models\Database; 

class NamaController extends Controller
{
    public function updateTanggal($id)
    {
        $record = Database::find($id);

        if ($record) {
            // Ambil tanggal yang sudah ada
            $tanggalLama = $record->Tanggal;

            // Simpan tanggal lama ke dalam database
            $record->Tanggal = $tanggalLama;
            $record->save();

            return redirect()->back()->with('success', 'Tanggal berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    }
}

