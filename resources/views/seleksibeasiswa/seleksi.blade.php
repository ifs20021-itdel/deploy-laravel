@extends('layouts.app')
@section('title','Seleksi')
@section('background', 'bg-white')
@section('content')
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>
        <div class="container mx-auto my-4">
            <h1 class="text-center text-4xl font-bold py-10">Seleksi</h1>
            <form class="my-4" action="{{ route('seleksi') }}" method="GET">
                <div class="flex items-center">
                    <label for="prodi" class="mr-2 font-bold">Program Studi:</label>
                    <select id="prodi" name="prodi" class="form-select block w-full max-w-xs">
                        <option value="">Semua</option>
                        <option value="DIII Teknologi Informasi" {{ request()->query('prodi') == 'DIII Teknologi Informasi' ? 'selected' : '' }}>D3 - TI</option>
                        <option value="DIII Teknologi Komputer" {{ request()->query('prodi') == 'DIII Teknologi Komputer' ? 'selected' : '' }}>D3 - TK</option>
                        <option value="DIV Sarjana Terapan Teknologi Rekayasa Perangkat Lunak" {{ request()->query('prodi') == 'DIV Sarjana Terapan Teknologi Rekayasa Perangkat Lunak' ? 'selected' : '' }}>D4 - TRPL</option>
                        <option value="S1 Informatika" {{ request()->query('prodi') == 'S1 Informatika' ? 'selected' : '' }}>S1 - IF</option>
                        <option value="S1 Sistem Informasi" {{ request()->query('prodi') == 'S1 Sistem Informasi' ? 'selected' : '' }}>S1 - SI</option>
                        <option value="S1 Teknik Elektro" {{ request()->query('prodi') == 'S1 Teknik Elektro' ? 'selected' : '' }}>S1 - TE</option>
                        <option value="S1 Manajemen Rekayasa" {{ request()->query('prodi') == 'Manajemen Rekayasa' ? 'selected' : '' }}>S1 - MR</option>
                        <option value="S1 Teknik Bioproses" {{ request()->query('prodi') == 'Teknik Bioproses' ? 'selected' : '' }}>S1 - TB</option>
                    </select>
                </div>
                <div class="flex items-center mt-4">
                    <label for="jenis" class="mr-2 font-bold">Jenis Beasiswa:</label>
                    <select id="jenis" name="jenis" class="form-select block w-full max-w-xs">
                        <option value="">Semua</option>
                        <option value="internal" {{ request()->query('jenis') == 'internal' ? 'selected' : '' }}>Internal</option>
                        <option value="eksternal" {{ request()->query('jenis') == 'eksternal' ? 'selected' : '' }}>Eksternal</option>
                    </select>
                </div>
                <div class="flex items-center mt-4">
                    <label for="status" class="mr-2 font-bold">Status Beasiswa:</label>
                    <select id="status" name="status" class="form-select block w-full max-w-xs">
                        <option value="">Semua</option>
                        <option value="sedang diproses" {{ request()->query('status') == 'sedang diproses' ? 'selected' : '' }}>Sedang Diproses</option>
                        <option value="diterima" {{ request()->query('status') == 'diterima' ? 'selected' : '' }}>Diterima</option>
                        <option value="ditolak" {{ request()->query('status') == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded my-4">Filter</button>
            </form>
            @if ($data->isEmpty())
                <x-carbon-warning height="50px" color="red" class="w-1/4 m-auto mb-2" />
                <h1 class="text-center font-bold text-1xl border w-1/4 mx-auto my-7 py-2 rounded-xl bg-red-600 text-white">Tidak ada data yang dapat ditampilkan!</h1>
            @else
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">NIM</th>
                            <th class="px-4 py-2">Program Studi</th>
                            <th class="px-4 py-2">Angkatan</th>
                            <th class="px-4 py-2">Beasiswa</th>
                            <th class="px-4 py-2">Status Beasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $beasiswa)
                            @if(Auth::user())
                                @if(Auth::user()->role == "Admin")
                                    <tr onclick="window.location='{{ route('detail', ['nim' => $beasiswa->nim]) }}'">
                                @else
                                    <tr>
                                @endif
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $beasiswa->nama }}</td>
                                    <td class="border px-4 py-2">{{ $beasiswa->nim }}</td>
                                    <td class="border px-4 py-2">{{ $beasiswa->prodi }}</td>
                                    <td class="border px-4 py-2">{{ $beasiswa->year }}</td>
                                    <td class="border px-4 py-2">{{ $beasiswa->jenis_Beasiswa }}</td>
                                    <td class="border px-4 py-2">{{ $beasiswa->status_beasiswa }}</td>
                                    </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </body>         
</html>
@endsection