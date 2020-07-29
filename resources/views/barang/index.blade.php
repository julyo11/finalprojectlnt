@extends('layout/main')

@section('title', 'Daftar Barang')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Barang</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $brg)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$brg->Kategori}}</td>
                        <td>{{$brg->Nama}}</td>
                        <td>{{$brg->Harga}}</td>
                        <td>{{$brg->Jumlah}}</td>
                        <td>{{$brg->Foto}}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection