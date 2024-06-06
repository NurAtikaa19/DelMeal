<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mealtype;

class MealtypeController extends Controller
{
    // Menampilkan daftar breakfast
    public function index()
    {
        $mealtype = Mealtype::all();
        return view('admin.mealtype.index', compact('mealtype'));
    }

    // Menampilkan form untuk membuat breakfast baru
    public function create()
    {
        return view('admin.mealtype.create');
    }

    // Menyimpan breakfast baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'type_name' => 'required',
        ]);

        Mealtype::create($request->all());
        return redirect()->route('mealtype.index')->with('success', 'Mealtype berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit breakfast
    public function edit($mealtype_id)
    {
        $mealtype = Mealtype::findOrFail($mealtype_id);
        return view('admin.mealtype.edit', compact('mealtype'));
    }


    public function update(Request $request, $mealtype_id)
    {
        $validatedData = $request->validate([
            'type_name' => 'required',
        ]);

        Mealtype::whereId($mealtype_id)->update($validatedData);

        return redirect()->route('mealtype.index')->with('success', 'Mealtype berhasil diperbarui');
    }


    public function destroy($mealtype_id)
    {
        $mealtype = Mealtype::findOrFail($mealtype_id);
        $mealtype->delete();

        return redirect()->route('mealtype.index')->with('success', 'Mealtype berhasil dihapus');
    }
}
