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
                                                    @if ($ns->status == 1)
                                                    <a href="{{ route('data-nilai-siswa', $ns->id) }}" class="btn btn-success btn-sm">Analisis Nilai</a>
                                                    @else
                                                    <button class="btn btn-sm btn-info">Sudah Ada Hasil</button>
                                                    @endif
                                                    
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