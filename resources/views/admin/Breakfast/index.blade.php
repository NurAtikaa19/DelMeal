@extends('layout.master')

@section('content')
    <h1>Daftar Menu Breakfast</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<a href="{{ route('breakfast.create') }}" class="btn btn-primary mb-3">Tambah Breakfast</a>
<table class="table">
    <tr>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    @foreach ($breakfasts as $breakfast)
    <tr>
        <td>{{ $breakfast->name }}</td>
        <td>{{ $breakfast->description }}</td>
        <td>{{ $breakfast->price }}</td>
        <td>
            <a href="{{ route('breakfast.show', $breakfast->id) }}">Lihat</a>
            <a href="{{ route('breakfast.edit', $breakfast->id) }}">Edit</a>
            <form action="{{ route('breakfast.destroy', $breakfast->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection