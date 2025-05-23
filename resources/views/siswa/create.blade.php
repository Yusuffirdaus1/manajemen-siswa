@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Siswa</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
        </div>
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis') }}" onkeypress="return isNumberKey(event)">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" id="kelas" name="kelas">
                <option value="X RPL" {{ old('kelas') == 'X RPL' ? 'selected' : '' }}>X RPL</option>
                <option value="XI RPL" {{ old('kelas') == 'XI RPL' ? 'selected' : '' }}>XI RPL</option>
                <option value="XII RPL" {{ old('kelas') == 'XII RPL' ? 'selected' : '' }}>XII RPL</option>
                <option value="X DKV1" {{ old('kelas') == 'X DKV1' ? 'selected' : '' }}>X DKV1</option>
                <option value="XI DKV1" {{ old('kelas') == 'XI DKV1' ? 'selected' : '' }}>XI DKV1</option>
                <option value="XII DKV1" {{ old('kelas') == 'XII DKV1' ? 'selected' : '' }}>XII DKV1</option>
                <option value="X DKV2" {{ old('kelas') == 'X DKV2' ? 'selected' : '' }}>X DKV2</option>
                <option value="XI DKV2" {{ old('kelas') == 'XI DKV2' ? 'selected' : '' }}>XI DKV2</option>
                <option value="XII DKV2" {{ old('kelas') == 'XII DKV2' ? 'selected' : '' }}>XII DKV2</option>
                <option value="X MP" {{ old('kelas') == 'X MP' ? 'selected' : '' }}>X MP</option>
                <option value="XI MP" {{ old('kelas') == 'XI MP' ? 'selected' : '' }}>XI MP</option>
                <option value="XII MP" {{ old('kelas') == 'XII MP' ? 'selected' : '' }}>XII MP</option>
                <option value="X AK" {{ old('kelas') == 'X AK' ? 'selected' : '' }}>X AK</option>
                <option value="XI AK" {{ old('kelas') == 'XI AK' ? 'selected' : '' }}>XI AK</option>
                <option value="XII AK" {{ old('kelas') == 'XII AK' ? 'selected' : '' }}>XII AK</option>
                <option value="X BR" {{ old('kelas') == 'X BR' ? 'selected' : '' }}>X BR</option>
                <option value="XI BR" {{ old('kelas') == 'XI BR' ? 'selected' : '' }}>XI BR</option>
                <option value="XII BR" {{ old('kelas') == 'XII BR' ? 'selected' : '' }}>XII BR</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

    <div class="mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Informasi Tambahan</h5>
                <ul>
                    <li>Pastikan semua data diisi dengan benar.</li>
                    <li>NIS harus unik dan belum terdaftar sebelumnya.</li>
                    <li>Alamat harus lengkap dan jelas.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
@endsection
