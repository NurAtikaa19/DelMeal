@extends('layout.master')

@section('content')
    <h1>Edit Jenis Menu</h1>

<form method="post" action="{{ route('mealtype.update', $mealtype->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="type_name" value="{{ $mealtype->type_name }}" class="form-control" required><br>
    <button type="submit"  class="btn btn-primary">Simpan</button>
</form>

@endsection