<!-- resources/views/sanksi/form.blade.php -->

<h1>{{ isset($sanksi) ? 'Edit Sanksi' : 'Create Sanksi' }}</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ isset($sanksi) ? route('sanksi.update', $sanksi->id_sanksi) : route('sanksi.store') }}" method="POST">
    @csrf
    @if (isset($sanksi))
        @method('PUT')
    @endif
    <label for="id_anggota">Anggota ID:</label>
    <input type="text" id="id_anggota" name="id_anggota" value="{{ isset($sanksi) ? $sanksi->id_anggota : old('id_anggota') }}">
    <br>
    <label for="id_peminjaman">Peminjaman ID:</label>
    <input type="text" id="id_peminjaman" name="id_peminjaman" value="{{ isset($sanksi) ? $sanksi->id_peminjaman : old('id_peminjaman') }}">
    <br>
    <label for="jumlah_denda">Jumlah Denda:</label>
    <input type="text" id="jumlah_denda" name="jumlah_denda" value="{{ isset($sanksi) ? $sanksi->jumlah_denda : old('jumlah_denda') }}">
    <br>
    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="tunggakan" {{ isset($sanksi) && $sanksi->status == 'tunggakan' ? 'selected' : '' }}>Tunggakan</option>
        <option value="lunas" {{ isset($sanksi) && $sanksi->status == 'lunas' ? 'selected' : '' }}>Lunas</option>
    </select>
    <br>
    <button type="submit">{{ isset($sanksi) ? 'Update' : 'Create' }}</button>
</form>