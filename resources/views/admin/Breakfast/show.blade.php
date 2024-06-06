<!-- resources/views/breakfast/show.blade.php -->

<h2>Detail Breakfast</h2>
<p>Nama: {{ $breakfast->name }}</p>
<p>Deskripsi: {{ $breakfast->description }}</p>
<p>Harga: {{ $breakfast->price }}</p>
<a href="{{ route('breakfast.index') }}">Kembali</a>
