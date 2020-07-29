<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $item = new Item;
        // $item->Kategori = $request->Kategori;
        // $item->Nama = $request->Nama;
        // $item->Harga = $request->Harga;
        // $item->Jumlah = $request->Jumlah;
        // $item->Foto = $request->Foto;

        // $item->save();

        // Item::Create([
        //     'Kategori' => $request->Kategori,
        //     'Nama' => $request->Nama,
        //     'Harga' => $request->Harga,
        //     'Jumlah' => $request->Jumlah,
        //     'Foto' => $request->Foto
        // ]);


        $request->validate([
            'Kategori' => 'required',
            'Nama' => 'required|min:5|max:80',
            'Harga' => 'integer',
            'Jumlah' => 'integer',
            'Foto' => 'required',
        ]);

        Item::create($request->all());

        return redirect('/items')->with('status', 'Barang baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'Kategori' => 'required',
            'Nama' => 'required|min:5|max:80',
            'Harga' => 'integer',
            'Jumlah' => 'integer',
            'Foto' => 'required',
        ]);

        Item::where('id', $item->id)
            ->update([
                'Kategori' => $request->Kategori,
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Jumlah' => $request->Jumlah,
                'Foto' => $request
            ]);

        if ($request->hasFile('Foto')) {
            $filename = $request->Foto->getClientOriginalName();
            $request->Foto->storeAs('Items', $filename, 'public');
            Item::find($item->id)->update(['Items' => $filename]);
        }

        return redirect('/items')->with('status', 'Data Barang Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        return redirect('/items')->with('status', 'Barang berhasil dihapus!');
    }
}