<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;

class UpdateContoller extends Controller
{
    public function tampilkandata($id){
   
        $data = Database::find($id);
    
        return view('database.tampildata',compact('data'), [
            'title' => 'Update Data',
        ]);
    }
    

    public function updatedata(Request $request, $id){
        $data = Database::find($id);
        $data -> update($request->all());
        return redirect()->route('database')->with('success','Data berhasil update');
    }
}
