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
                                    <strong class="card-title">Rizky | Kelas XI-A | Jurusan IPA</strong>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">
                                        
                                        </h3>
                                        <div>
                                        <a href="{{ route('siswa') }}" class="btn btn-info btn-sm">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Pelajaran</th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                                {{-- <th>#</th> --}}
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Matematika</td>
                                                <td>80</td>
                                                <td>Baik</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Fisika</td>
                                                <td>75</td>
                                                <td>Cukup</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Kimia</td>
                                                <td>85</td>
                                                <td>Baik</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>B.Indonesia</td>
                                                <td>85</td>
                                                <td>Baik</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2"><b>Rata-rata</b></td>
                                                <td><b>80</b></td>
                                                <td><b>Baik</b></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">HASIL JURUSAN </strong>
                                </div>
                                <div class="card-body">
                                    <h2 class="text-center">TEKNIK INFORMASI</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end tabel --}}    
@endsection