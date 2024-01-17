<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class DatabaseController extends Controller
{
    public function index(Request $request)
    {
        $data = Database::paginate(6);
        return view('database.index', compact('data'), [
            "title" => "Home",
        ]);
    }
   public function filter(Request $request)
{
    $start_date = $request->start_date;
    $end_date = $request->end_date;
    $customer_name = $request->customer_name;

    // Ambil data dropdown langsung di sini
    $dropdown['NAMA_CUSTOMER'] = Database::select('NAMA_CUSTOMER')->distinct()->pluck('NAMA_CUSTOMER', 'NAMA_CUSTOMER');

    $query = Database::query();

    if ($start_date) {
        $query->whereDate('Tanggal', '>=', $start_date);
    }

    if ($end_date) {
        $query->whereDate('Tanggal', '<=', $end_date);
    }

    if ($customer_name) {
        $query->where('NAMA_CUSTOMER', 'LIKE', '%' . $customer_name . '%');
    }

    $data = $query->paginate(6);

    return view('database.index', [
        'data' => $data,
        'dropdown' => $dropdown,
        'title' => 'Data Terfilter',
    ]);
}



    public function delete($id)
    {
        $data = Database::find($id);
        if ($data != null) {
            $data->delete();
            return redirect()->route('database')->with('success', 'Data berhasil dihapus');
        }
    }

    public function diagram()
    {
        return view('database.diagram', [
            "title" => "Diagram",
        ]);
    }

    public function show($id)
    {
        $data = Database::find($id);
        return $data;
    }
}
