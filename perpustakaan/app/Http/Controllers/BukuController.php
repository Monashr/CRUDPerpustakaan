<?php

namespace App\Http\Controllers;
use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::all();
        return view("viewbuku", compact("data"));
    }

    public function menutambahbuku()
    {
        return view('menutambahbuku');
    }

    public function insertbuku(Request $request)
    {
        buku::create($request->all());
        return redirect()->route('viewbuku')->with('success', 'Data Berhasil ditambahkan!');
    }

    public function deletebuku($id)
    {
        $data = buku::find($id);
        $data->delete();
        return redirect()->route('viewbuku')->with('success', 'Data Berhasil Dihapus!');
    }

    public function tampildatabuku($id)
    {
        $data = buku::find($id);
        return view('menuupdatebuku', compact('data'));
    }

    public function updatedatabuku(Request $request, $id)
    {
        $data = buku::find($id);
        $data->update($request->all());
        return redirect()->route('viewbuku')->with('success', 'Data Berhasil Diupdate!');
    }

}
