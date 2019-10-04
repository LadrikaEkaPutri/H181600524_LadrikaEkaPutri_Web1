<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
        $listArtikel=Artikel::all();

        return view('artikel.index',compact('listArtikel'));
    }
    public function show($id){
        $artikel=Artikel::find($id);

       return view( 'artikel.show',compact ('artikel')); 
    }
    
    public function create(){
        return view('artikel.create');
    }
    public function store(Request $request){
        $input=$request->all();

        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
}
