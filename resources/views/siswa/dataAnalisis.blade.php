@extends('layouts.admin')
@section('title', 'Data Analis Siswa')
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
                                    <strong class="card-title">Data Analis Siswa</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Hasil Analisa</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        @foreach ($dataAns as $datas)
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $datas->nama_siswa }}</td>
                                                <td>{{ $datas->kelas}}</td>
                                                <td>{{ $datas->hasil_jurusan }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('input-nilai', $datas->id) }}" class="btn btn-success btn-sm">Masukan Nilai</a>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a> --}}
                                                    {{-- <a href="{{ route('hapus-siswa',$datas->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin {{ $datas->nama_siswa }} akan di hapus ?' )">Hapus</a> --}}
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