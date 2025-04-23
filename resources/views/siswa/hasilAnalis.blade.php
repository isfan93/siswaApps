@extends('layouts.admin')
@section('title', 'Nilai Siswa')
@section('content')

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>@yield('title')</h1>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- table --}}
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Siswa</strong>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">
                                        
                                        </h3>
                                        <div>
                                        <a href="{{ route('input-nilai') }}" class="btn btn-info btn-sm">Masukan Nilai Siswa</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>                                                
                                                <th>Matematika</th>
                                                <th>Fisika</th>
                                                <th>Kimia</th>
                                                <th>Biologi</th>
                                                <th>Bahasa Indonesia</th>
                                                <th>Bahasa Inggris</th>
                                                <th>Keterangan</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        @foreach ($nilaiSiswa as $ns)
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $ns->siswa->nisn }}</td>
                                                <td>{{ $ns->siswa->nama_siswa }}</td>
                                                <td>{{ $ns->kelas->nama_kelas }}</td>
                                                <td>{{ $ns->matematika }}</td>
                                                <td>{{ $ns->fisika }}</td>
                                                <td>{{ $ns->kimia }}</td>
                                                <td>{{ $ns->biologi }}</td>
                                                <td>{{ $ns->bahasa_indonesia }}</td>
                                                <td>{{ $ns->bahasa_inggris }}</td>
                                                <td>{{ $ns->keterangan }}</td>
                                                <td>
                                                    @if ($ns->status == 2)
                                                        <a href="{{ route('data-nilai-siswa', $ns->id) }}" class="btn btn-success btn-sm">Analisis Nilai</a>    
                                                    @else
                                                        <button class="btn btn-sm btn-info">Done</button>
                                                    @endif
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                </div>
                            </div>

                            <h1 class="mb-4">Hasil Rekomendasi Jurusan</h1>
    
    <div class="card mb-4">
        <div class="card-header">
            <h3>Urutan Rekomendasi Jurusan</h3>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Peringkat</th>
                            <th>Jurusan</th>
                            <th>Kecocokan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $index => $result)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><strong>{{ $result['jurusan']->nama }}</strong></td>
                            <td>{{ number_format($result['score'] * 20, 2) }}%</td>
                            <td>{{ $result['jurusan']->deskripsi }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <a href="{{ route('home') }}" class="btn btn-secondary">
        Kembali ke Form Input
    </a>





                        </div>
                    </div>
                </div>
            </div>
            {{-- end tabel --}}    
@endsection
