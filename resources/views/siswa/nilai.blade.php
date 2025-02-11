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
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">
                                        
                                        </h3>
                                        <div>
                                        <a href="{{ route('input-nilai') }}" class="btn btn-info btn-sm">Masukan Nilai Siswa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>                                                
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        @foreach ($siswas as $siswa)
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $siswa->nisn }}</td>
                                                <td>{{ $siswa->nama_siswa }}</td>
                                                <td>{{ $siswa->jenis_kelamin }}</td>
                                                <td>{{ $siswa->kelas }}</td>
                                                <td>{{ $siswa->jurusan }}</td>
                                                <td>
                                                    <a href="{{ route('data-nilai-siswa') }}" class="btn btn-success btn-sm">Lihat Nilai</a>
                                                    {{-- <a href="#" class="btn btn-warning btn-sm">Hapus</a> --}}
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        {{-- <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NISN</th>
                                                <th>Nama Siswa</th>
                                                <th>Nama Guru</th>
                                                <th>Pelajaran</th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead> --}}
                                        {{-- @foreach ($nilaiSiswa as $nilai)
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $nilai->siswa->nisn }}</td>
                                                <td>{{ $nilai->siswa->nama_siswa }}</td>
                                                <td>{{ $nilai->guru->nama_guru }}</td>
                                                <td>{{ $nilai->pelajaran->nama_pelajaran }}</td>
                                                <td>{{ $nilai->nilai_pelajaran }}</td>
                                                <td>{{ $nilai->keterangan }}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end tabel --}}    
@endsection