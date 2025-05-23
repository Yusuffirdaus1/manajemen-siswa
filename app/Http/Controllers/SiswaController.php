<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $siswa = Siswa::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('nama', 'like', "%" . $search . "%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        $siswa->appends(['search' => $search]);

        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'nis'    => 'required|string|max:50|unique:siswas',
            'kelas'  => 'required|string|max:50',
            'alamat' => 'required|string',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'nis'    => 'required|string|max:50|unique:siswas,nis,' . $siswa->id,
            'kelas'  => 'required|string|max:50',
            'alamat' => 'required|string',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
