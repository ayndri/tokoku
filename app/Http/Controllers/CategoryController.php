<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category()
    {
        return view('products/category');
    }

    public function yun()
    {
        return view('products/tags');
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'namaKategori' => 'required'
        ]);

        if($request->hasFile('fotoKategori')) {
            $file = $request->file('fotoKategori');
            $namaFile = time() . "_" . $file->getClientOriginalName();
            $folder = "kategori";
            $file->move($folder, $namaFile);
        }
        else {
            $namaFile = "dummykategori.png";
        }

        $kategori = new Category;
        $kategori->namaKategori = $request->namaKategori;
        $kategori->slugKategori = $request->slugKategori;
        $kategori->deskKategori = $request->deskKategori;
        $kategori->fotoKategori = $namaFile;
        $kategori->save();

        return back();
    }
}
