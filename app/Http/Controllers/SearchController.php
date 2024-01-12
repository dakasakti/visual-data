<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Database;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $data = Database::where('NAMA_CUSTOMER', 'LIKE', '%' .$request->search. '%')->get();
            dd($data);
        } else {
            $data = Database::all();
        }

        return view('database.index', ['data' => $data]);
    }
}
