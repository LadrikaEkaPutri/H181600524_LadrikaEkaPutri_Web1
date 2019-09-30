@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Artikel Kategori</div>

                <div class="card-body">
                <table Border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Users Id</td>
            <td>Create</td>
            <td>Aksi</td>
        </tr>
                
            @foreach($listKategoriArtikel as $item)  
        <tr>
            <td>{!! $item->id !!}</td>
            <td>{!! $item->nama !!}</td>
            <td>{!! $item->users_id !!}</td>
            <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
            <td>
               <a href="{!! route ('kategori_artikel.show',[$item->id]) !!}">Lihat"</a>
        </tr>
 @endforeach
    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
