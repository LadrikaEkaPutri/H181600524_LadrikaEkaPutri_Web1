<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use App\KategoriBerita;

class BeritaController extends Controller
{
  public function index(){
    $listBerita=Berita::all();

    return view('berita.index',compact('listBerita'));
}
public function show($id){
    $Berita=Berita::find($id);

     if(empty($Berita)){
      return redirect(route ('berita.index'));
}
    
   return view( 'berita.show',compact ('Berita')); 
}

public function create(){
  $kategoriBerita=KategoriBerita::pluck('nama','id');


    return view('berita.create', compact('kategoriBerita'));
}
public function store(Request $request){
    $input=$request->all();

    Berita::create($input);

    return redirect(route('berita.index'));
}
public function edit($id){
  $Berita=Berita::find($id);

    if(empty($Berita)){
      return redirect(route ('berita.index'));
}

$kategoriBerita=KategoriBerita::pluck('nama','id');

return view('berita.edit',compact('kategoriBerita','Berita'));
}

public function update($id,Request $request){
$Berita=Berita::find($id);
$input= $request->all();

if(empty($Berita)){
  return redirect(route ('berita.index'));
}
$Berita->update($input);

return redirect(route ('berita.index'));
}

public function destroy($id){
  $Berita=Berita::find($id);

  if(empty($Berita)){
    return redirect(route ('berita.index'));
  }
  $Berita->delete();
  return redirect(route('berita.index'));
}
}