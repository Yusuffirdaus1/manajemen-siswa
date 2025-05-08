@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Data Siswa</h2>

    <form action="{{ route('siswa.index') }}" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari nama siswa..." value="{{ request('search') }}">
    </form>

    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($siswas as $index => $siswa)
            <tr>
                <td>{{ $index + $siswas->firstItem() }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">Data tidak ditemukan</td></tr>
        @endforelse
        </tbody>
    </table>

    {{ $siswas->links() }}
</div>
@endsection
