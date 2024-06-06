@extends('layout.master')

@section('content')
    <h1>Daftar Jenis Menu</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<a href="{{ route('mealtype.create') }}" class="btn btn-primary mb-3">Tambah Mealtype</a>
<table class="table">
    <tr>
        <th>Jenis Menu</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mealtype as $mt)
    <tr>
        <td>{{ $mt->type_name }}</td>
        <td>
            <a href="{{ route('mealtype.edit', $mt->id) }}" class="btn btn-success">Edit</a>
            <form action="{{ route('mealtype.destroy', $mt->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"  class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection