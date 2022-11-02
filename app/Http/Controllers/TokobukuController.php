<?php

namespace App\Http\Controllers;
use App\Models\Tokobuku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TokobukuController extends Controller
{
    public function index(){
        return view("tokobuku.index", [
            'tokobukus' => Tokobuku::all(),
            'title' => "Toko Buku"
        ]);
    }

    public function create(){
        return view("tokobuku.create", [
            'tokobukus' => Tokobuku::all(),
            'title' => "Toko Buku"
        ]);
    }

    public function store(){
        $validasiData = $request->validate([
            'nama' => 'required|string|max:100',
            'jenis' => 'required|string|max:100',
            'harga' => 'required|integer|max:100',
        ]);

        Tokobuku::create($validasiData);
        return redirect()->route('tokobuku.index')->with('success', 'Data buku berhasil ditambahkan');

    }

    public function show(){
        return view("tokobuku.show", [
            'title' => "Toko Buku",
            'tokobuku' => $id,
        ]);
    }
}
