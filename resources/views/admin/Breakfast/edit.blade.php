<!-- resources/views/breakfast/edit.blade.php -->

<h2>Edit Breakfast</h2>
<form method="post" action="{{ route('breakfast.update', $breakfast->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $breakfast->name }}"><br>
    <textarea name="description">{{ $breakfast->description }}</textarea><br>
    <input type="text" name="price" value="{{ $breakfast->price }}"><br>
    <button type="submit">Simpan</button>
</form>