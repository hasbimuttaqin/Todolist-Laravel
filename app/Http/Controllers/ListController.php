<?php

namespace App\Http\Controllers;

use App\Models\Tugas;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){

            $data = Tugas::where('tugas','LIKE','%' .$request->search.'%')->paginate();

        }else{

            $data = Tugas::all();
        }



        return view('todo.datatugas',compact('data'));
    }


    public function tambah()
    {
        return view('todo.tambahtugas');
    }

    public function insert(Request $request)
    {
        Tugas::create($request->all());

        return redirect('list')->with('success', 'List berhasil di tambahkan');

    }


    public function tampiltugas($id)
    {
        $data = Tugas::find($id);

        return view('todo.tampiltugas',compact('data'));
    }

    public function updatetugas(Request $request, $id)
    {
        $data = Tugas::find($id)->update([

           'tugas' => $request->input("tugas")

        ]);

        return redirect('list')->with('success', 'List berhasil di update');
    }


    public function delete(Request $request, $id)
    {
        $data = Tugas::find($id)->delete();

        return redirect('list')->with('success', 'List berhasil di hapus');
    }
}
