@extends('layout.master')

@section('content')
    <h1>Tambah Data Menu</h1>

<form method="post" action="{{ route('mealtype.store') }}">
    @csrf
    <input type="text" name="type_name" placeholder="Jenis Menu" class="form-control" required><br>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection