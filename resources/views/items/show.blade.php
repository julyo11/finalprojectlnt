@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
<style>
.foto {
    width: 100px;
    height: 100px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Barang</h1>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Kategori: {{$item->Kategori}}</p>
                    <p class="card-text">Nama: {{$item->Nama}}</p>
                    <p class="card-text">Harga: {{$item->Harga}}</p>
                    <p class="card-text">Jumlah: {{$item->Jumlah}}</p>
                    <p class="card-text foto">Foto: <br>
                        {{$item->Foto}}
                    </p>
                    <a href="{{$item->id}}/edit" class="btn btn-success">Edit</a>
                    <form action="/items/{{$item->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm ('Apakah data barang ingin dihapus ?')">Delete</button>
                    </form>
                    <br> <br>
                    <a href="/items" class="card-link ml-1">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection