<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class DatabaseController extends Controller
{
    
    public function index(Request $request){
            $data = Database::paginate(6);
            return view('database.index',compact('data'),[
                "title" => "Home",
            ]);  
        }
    
    public function delete($id){
        $data = Database::find($id);
        if ($data != null) {
        $data->delete();
                return redirect()->route('database')->with('success','Data berhasil dihapus');
        }
    }
    public function getData($id){
        $data = Database::where('ORG_CODE',$id)->get();
        return response()->json($data);
     }
     public function diagram (){
        return view('database.diagram',[
            "title" => "Diagram",
        ]);
     }
     
     public function show($id){
        $data = Database::find($id);
        return $data;
     }
    

   
} 

