<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class DatabaseController extends Controller
{
    public function index(Request $request)
    {
        $dropdown['NAMA_CUSTOMER'] = Database::select('NAMA_CUSTOMER')->distinct()->pluck('NAMA_CUSTOMER', 'NAMA_CUSTOMER');
        // ini buat custom si user mau berapa row yang ditampilin
        $perPage = $request->input('per_page');
        // ini paginasi ngambil dari atas
        $data = Database::paginate($perPage);

        $user = $request->user();
        $imageProfile = $user->image ?? 'https://placehold.co/300x300/png';

        return view('database.index', compact('data'), [
            'dropdown' => $dropdown,
            "title" => "Home",
            'request' => $request,
            'imageProfile' => $imageProfile
        ]);
    }

    public function filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $customer_name = $request->customer_name;
        $perPage = $request->input('per_page', 10);

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

        // Tambahkan $perPage di dalam metode paginate
        $data = $query->paginate($perPage);

        return view('database.index', [
            'data' => $data,
            'dropdown' => $dropdown,
            'title' => 'Data Terfilter',
            'perPage' => $perPage,
        ]);
    }

    public function delete($id)
    {
        $data = Database::find($id);
        if (!$data) {
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
        return Database::find($id);
    }
}
