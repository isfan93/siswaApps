@extends('layouts.admin')
@section('title', 'Daftar Siswa')
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
                                        <a href="{{ route('form-data-siswa') }}" class="btn btn-info btn-sm">Tambah Data Siswa</a>
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
                                                <th>Alamat</th>
                                                <th>No Telp</th>
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
                                                <td>{{ $siswa->kelas->nama_kelas }}</td>
                                                <td>{{ $siswa->alamat }}</td>
                                                <td>{{ $siswa->no_telp }}</td>
                                                <td>
                                                    @if ($siswa->status == 1)
                                                    {{-- <a href="{{ route('input-nilai', $siswa->id) }}" class="btn btn-success btn-sm">Input Nilai</a> --}}
                                                    <a href="{{ route('lihat-nilai', $siswa->id) }}" class="btn btn-success btn-sm">Lihat Nilai</a>
                                                    {{-- <a href="#" class="btn btn-primary btn-sm">Edit</a> --}}
                                                    {{-- <a href="{{ route('hapus-siswa',$siswa->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin {{ $siswa->nama_siswa }} akan di hapus ?' )">Hapus</a> --}}
                                                    @else
                                                    {{-- <a href="#" class="btn btn-primary btn-sm">Edit</a> --}}
                                                    {{-- <a href="{{ route('hapus-siswa',$siswa->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin {{ $siswa->nama_siswa }} akan di hapus ?' )">Hapus</a> --}}
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end tabel --}}      
@endsection