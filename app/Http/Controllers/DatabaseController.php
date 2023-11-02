<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Database;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class DatabaseController extends Controller
{
    //
    //untuuk menampilkan data keseluruhan
    public function index(Request $request){
            // $data = Database::latest();
            $data = Database::paginate();
            if($request->ajax()){
                $data = Database::where('NAMA_CUSTOMER','LIKE','%'.$request->NAMA_CUSTOMER.'%')->paginate(5);
                $output = '';
                if(count($data) >0){
                    $output= '<ul class="list-group" style="display:block; position:relative; z- index:1">';
                    foreach ($data as $item){
                      $output .= '<li class="list-group-item">'.$item->NAMA_CUSTOMER.'</li>';
                 }
                    $output ='</ul>';    
            }
            else {
                $output .= '<li class="list-group-item">No data found </li>'; 
            }  
            return $output;
        }
            return view('database.index',compact('data'),[
                "title" => "Home",
            ]);  
        }

        public function getDatabase(Request $request)
        {
            if ($request->ajax()) {
                $data = Database::latest()->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                        return $actionBtn;
                    })  
                    ->rawColumns(['action'])
                    ->make(true);
            }
        
    }
    public function tampilkandata($id){
        $data = Database::find($id);
        // dd($data);
        return view('database\tampildata',compact('data'),[
            "title" => "Update"

        ]);
    }
    public function updatedata(Request $request, $id){
        $data = Database::find($id);
        $data -> update($request->all());
        return redirect()->route('database')->with('success','Data berhasil update');
    }
    // menghapus data
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
     public function tambahdata(){
        return view('database/tambahdata', [
            "title" => "Create Data"
        ]);
     }
     public function insertdata(Request $request){
        // dd($request->all());
        Database::create($request->all());
        return redirect()->route('database')->with('succsess','Data Berhasil Ditambahkan');
     }

     public function diagram (){
        return view('database.diagram',[
            "title" => "Diagram",
        ]);
     }



   
}

