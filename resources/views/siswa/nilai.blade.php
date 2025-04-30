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
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('siswa.export') }}" class="btn btn-warning rounded"><i class="fa fa-file-o" aria-hidden="true"></i> Export Data </a>
                                            <button type="button" class="btn btn-success rounded" data-toggle="modal" data-target="#importExcel"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Import Data</button>
                                            <a href="{{ route('form-data-siswa') }}" class="btn btn-info rounded"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data </a>
                                            <a href="{{ route('hapus-semua-data') }}" class="btn btn-danger" onclick="return confirm('Apakah yakin semua data akan di hapus ?' )"><i class="fa fa-trash" aria-hidden="true"></i> Hapus Semua Data</a>
                                          </div>
                                        {{-- <div>
                                            <button type="button" class="btn btn-primary btn-sm mr-5" data-toggle="modal" data-target="#importExcel">
                                                IMPORT EXCEL
                                            </button>
                                            <a href="{{ route('form-data-siswa') }}" class="btn btn-info btn-sm">Tambah Data Siswa</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus Semua Data Siswa</a>
                                        </div> --}}
                                    </div>

                                   
                                    {{-- <button type="button" class="btn btn-primary btn-sm mr-5" data-toggle="modal" data-target="#importExcel">
                                        TAMBAH DATA SISWA
                                    </button> --}}
                             
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">
                                        
                                        </h3>
                                        <div>
                                        <a href="{{ route('input-nilai') }}" class="btn btn-info btn-sm">Masukan Nilai Siswa</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('siswa.analisisAll') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NISN</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Kelas</th>                                                
                                                <th>Matematika</th>
                                                <th>Fisika</th>
                                                <th>Kimia</th>
                                                <th>Biologi</th>
                                                <th>Bahasa Inggris</th>
                                                <th>Jurusan</th>
                                                {{-- <th>#</th> --}}
                                            </tr>
                                        </thead>
                                        @foreach ($nilaiSiswa as $ns)
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $ns->nisn }}</td>
                                                <td>{{ $ns->nama_siswa }}</td>
                                                <td>{{ $ns->kelas->nama_kelas }}</td>
                                                <td>{{ $ns->jenis_kelamin }}</td>
                                                <td>{{ $ns->matematika }}</td>
                                                <td>{{ $ns->fisika }}</td>
                                                <td>{{ $ns->kimia }}</td>
                                                <td>{{ $ns->biologi }}</td>
                                                <td>{{ $ns->bahasa_inggris }}</td>
                                                <td><strong>{{ $ns->keterangan }}</td></strong>
                                                {{-- <td>
                                                    @if ($ns->matematika >= 80 && $ns->fisika >= 60 && $ns->kimia >= 80 && $ns->biologi >= 45 && $ns->bahasa_inggris >= 50)
                                                        <b>TKJ</b>
                                                    @elseif ($ns->matematika >= 75 && $ns->fisika >= 85 && $ns->kimia >= 50 && $ns->biologi >= 35 && $ns->bahasa_inggris >= 55)
                                                        <b>TSM</b>
                                                    @endif
                                                </td> --}}
                                                {{-- <td>
                                                    @if ($ns->status == 0)
                                                    <label style="color:rgb(128, 0, 0)">Belum Ada Hasil</label>
                                                   
                                                    @else
                                                    <label style="color:rgb(0, 128, 28)">Sudah Ada Hasil</label>
                                                    @endif
                                                    
                                                </td> --}}
                                            </tr>
                                        </tbody>
                                        @endforeach
                                       
                                    </table>
                                    <div class="d-flex justify-content-center align-items-center full-height">
                                        <button class="btn btn btn-dark text-center rounded" type="submit">Analisis Jurusan <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                        {{-- <a href="#" class="btn btn btn-warning text-center">Analisis data</a> --}}
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-4">
                           
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Hasil Analisis Jurusan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataAns as $datas)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $datas->nama_siswa }}</td>
                                            <td>{{ $datas->hasil_jurusan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
            {{-- end tabel --}}    

            <!-- Import Excel -->
            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" >
                    <form method="post" action="{{ route('siswa.import') }}" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            </div>
                            <div class="modal-body">
     
                                @csrf
     
                                <label>Pilih file excel</label>
                                <div class="form-group">
                                    <input type="file" name="file" required="required">
                                </div>
     
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    @if (session('success'))
                        // Tampilkan Loading Dulu
                        Swal.fire({
                            title: 'Memproses...',
                            html: 'Tunggu sebentar ya...',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: () => {
                                Swal.showLoading()
                            }
                        });
        
                        // Setelah 2 detik, tutup loading dan tampilkan sukses
                        setTimeout(function () {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: '{{ session('success') }}',
                                icon: 'success',
                                confirmButtonText: 'Oke'
                            });
                        }, 2000);
        
                    @elseif (session('error'))
                        Swal.fire({
                            title: 'Oops!',
                            text: '{{ session('error') }}',
                            icon: 'error',
                            confirmButtonText: 'Coba Lagi'
                        });
                    @endif
                });
            </script>
        
@endsection