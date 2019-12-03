<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    public function index(){
        $listPengumuman=Pengumuman::all();

        return view('Pengumuman.index',compact('listPengumuman'));
    }
    public function show($id){
      $Pengumuman=Pengumuman::find($id);

     return view( 'pengumuman.show',compact ('Pengumuman')); 
  }

    public function create(){
      $kategoriPengumuman=KategoriPengumuman::pluck('nama','id');
 

      return view('pengumuman.create', compact('kategoriPengumuman'));
} 
  public function store(Request $request){
  $input=$request->all();

  Pengumuman::create($input);

  return redirect(route('pengumuman.index'));
  }
  public function edit($id){
    $Pengumuman=Pengumuman::find($id);

      if(empty($Pengumuman)){
        return redirect(route ('pengumuman.index'));
  }

  $kategoriPengumuman=KategoriPengumuman::pluck('nama','id');

  return view('pengumuman.edit',compact('kategoriPengumuman','Pengumuman'));
}

public function update($id,Request $request){
  $Pengumuman=Pengumuman::find($id);
  $input= $request->all();

  if(empty($Pengumuman)){
    return redirect(route ('pengumuman.index'));
  }
  $Pengumuman->update($input);

  return redirect(route ('pengumuman.index'));
}
public function destroy($id){
  $Pengumuman=Pengumuman::find($id);

  if(empty($Pengumuman)){
    return redirect(route ('pengumuman.index'));
  }
  $Paengumuman->delete();
  return redirect(route('pengumuman.index'));
}
}