@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Artikel</div>

                <div class="card-body">
                <a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
                 <table Border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Users Id</td>
            <td>Create</td>
            <td>update</td>
            <td>Aksi</td>
        </tr>
                
            @foreach($listKategoriArtikel as $item)  
        <tr> 
        
            <td>{!! $item->id !!}</td>
            <td>{!! $item->nama !!}</td>
            <td>{!! $item->users_id !!}</td>
            <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
            <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
            <td>
               <a href ="{!! route('kategori_artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success">Lihat</a>
          
               <a href ="{!! route('kategori_artikel.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">Ubah</a>
       
             {!! Form::open(['route' => ['kategori_artikel.destroy',$item->id],'method'=>'delete']) !!}
       
            {!! Form::submit('Hapus',['class'=>'btn btn-sm btn-danger','onclick' =>"return confirm('Apakah anda yakin menghapus data ini')"]); !!}

            {!! Form::close() !!}
       
           </td> 
        </tr>
 @endforeach
    </table>
                  </div>
             </div>
         </div>
     </div>
 </div>
@endsection