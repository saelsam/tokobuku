<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Tokobuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        return view("buku.index", [
            'bukus' => Buku::all(),
            'title' => "Toko Buku"
        ]);
    }
    
}
