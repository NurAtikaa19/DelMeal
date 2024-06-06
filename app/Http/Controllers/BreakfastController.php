<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Breakfast;

class BreakfastController extends Controller
{
    // Menampilkan daftar breakfast
    public function index()
    {
        $breakfasts = Breakfast::all();
        return view('admin.breakfast.index', compact('breakfasts'));
    }

    // Menampilkan form untuk membuat breakfast baru
    public function create()
    {
        return view('admin.breakfast.create');
    }

    // Menyimpan breakfast baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'menu_name' => 'required',
            'mealtype_id' => 'required|numeric',
        ]);

        Breakfast::create($request->all());
        return redirect()->route('breakfast.index')->with('success', 'Breakfast berhasil ditambahkan.');
    }

    // Menampilkan detail breakfast
    public function show(Breakfast $breakfast)
    {
        return view('breakfast.show', compact('breakfast'));
    }

    // Menampilkan form untuk mengedit breakfast
    public function edit(Breakfast $breakfast)
    {
        return view('breakfast.edit', compact('breakfast'));
    }

    // Menyimpan perubahan dari form edit ke dalam database
    public function update(Request $request, Breakfast $breakfast)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $breakfast->update($request->all());
        return redirect()->route('breakfast.index')->with('success', 'Breakfast berhasil diperbarui.');
    }

    // Menghapus breakfast dari database
    public function destroy(Breakfast $breakfast)
    {
        $breakfast->delete();
        return redirect()->route('breakfast.index')->with('success', 'Breakfast berhasil dihapus.');
    }
}
