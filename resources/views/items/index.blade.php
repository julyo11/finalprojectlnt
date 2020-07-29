@extends('layouts.app')

@section('title', 'Final Project LnT Julyo')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Barang</h1>
            <a href="/items/create" class="btn btn-primary my-3">Insert New Item</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul class="list-group">
                @foreach($items as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$item->Kategori}}
                    <a href="/items/{{$item->id}}" class="badge badge-secondary">Details</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection