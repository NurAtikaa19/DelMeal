@extends('layout.master')

@section('content')
    <h1>Tambah Data Menu</h1>

<form method="post" action="{{ route('breakfast.store') }}">
    @csrf
    <input type="text" name="menu_name" placeholder="Nama Menu" class="form-control" required><br>
    <input type="text" name="mealtype" placeholder="Mealtype"class="form-control" required disabled><br>
    <!-- <textarea name="description" placeholder="Deskripsi" class="form-control" rows="5" required></textarea><br>
    <input type="text" name="price" placeholder="Harga"class="form-control" required><br> -->
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection