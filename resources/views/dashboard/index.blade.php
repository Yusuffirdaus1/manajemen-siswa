@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <img src="{{ asset('images/Logo_SMK_Negeri_40_Jakarta__3_-removebg-preview.png') }}" alt="Logo SMKN 40" width="120">
        <h3>SMKN 40 Jakarta</h3>
        <p class="mb-0">Jl. Nanas II No.4, RT.7/RW.12, Utan Kayu Sel., Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13120</p>
    </div>
    <hr>
    <div class="clock" style="position: absolute; top: 10px; right: 10px; font-size: 1em;">
        <i class="fas fa-clock"></i> <span id="liveClock"></span>
    </div>
    <h2>Dashboard</h2>
    <p>Selamat datang di dashboard!</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-3 h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Siswa</h5>
                    <p class="card-text" style="font-size: 1.5em;">{{ \App\Models\Siswa::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white mb-3 h-100">
                <div class="card-body">
                    <h5 class="card-title">Jurusan</h5>
                    <ul class="list-unstyled d-flex flex-wrap">
                        <li style="width: 50%; font-size: 0.9em;">RPL</li>
                        <li style="width: 50%; font-size: 0.9em;">DKV1</li>
                        <li style="width: 50%; font-size: 0.9em;">DKV2</li>
                        <li style="width: 50%; font-size: 0.9em;">MP</li>
                        <li style="width: 50%; font-size: 0.9em;">AK</li>
                        <li style="width: 50%; font-size: 0.9em;">BR</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white mb-3 h-100">
                <div class="card-body">
                    <h5 class="card-title">Siswa Baru Hari Ini</h5>
                    <p class="card-text" style="font-size: 1.5em;">{{ \App\Models\Siswa::whereDate('created_at', today())->count() }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h4>Siswa Terbaru</h4>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Kelas</th>
                            <th>Tanggal Ditambahkan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (\App\Models\Siswa::orderBy('created_at', 'desc')->take(5)->get() as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function updateClock() {
            var now = new Date();
            var time = now.toLocaleTimeString();
            $('#liveClock').text(time);
        }

        updateClock();
        setInterval(updateClock, 1000);
    });
</script>
@endsection
