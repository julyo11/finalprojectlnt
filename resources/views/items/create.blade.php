@extends('layouts.app')

@section('title', 'Tambah Data Barang')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Tambah Barang Baru</h1>

            <form method="post" action="/items" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Kategori">Kategori</label>
                    <input type="text" class="form-control @error('Kategori') is-invalid @enderror" id="Kategori"
                        placeholder="Masukkan kategori" name="Kategori" value="{{ old('Kategori') }}">
                    <div class="invalid-feedback">
                        @error('Kategori')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama"
                        placeholder="Masukkan nama" name="Nama" value="{{ old('Nama') }}">
                    <div class=" invalid-feedback">
                        @error('Nama')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="text" class="form-control @error('Harga') is-invalid @enderror" id="Harga"
                        placeholder="Rp." name="Harga" value="{{ old('Harga') }}">
                    <div class="invalid-feedback">
                        @error('Harga')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="Jumlah">Jumlah</label>
                    <input type="text" class="form-control @error('Jumlah') is-invalid @enderror" id="Jumlah"
                        placeholder="Masukkan jumlah" name="Jumlah" value="{{ old('Jumlah') }}">
                    <div class="invalid-feedback">
                        @error('Jumlah')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="Foto">Foto</label>
                    <input type="file" class="form-control-file @error('Foto') is-invalid @enderror" id="Foto"
                        name="Foto" value="{{ old('Foto') }}">
                    <div class="invalid-feedback">
                        @error('Foto')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Tambah</button>

            </form>

        </div>
    </div>
</div>
@endsection