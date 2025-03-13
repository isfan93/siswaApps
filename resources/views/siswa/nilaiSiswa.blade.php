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
                                    <strong class="card-title">{{ $nilaiSiswa->siswa->nama_siswa }} | {{ $nilaiSiswa->kelas->nama_kelas }}</strong>
                                    
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
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $nilaiSiswa->matematika }}</td>
                                                <td>{{ $nilaiSiswa->fisika }}</td>
                                                <td>{{ $nilaiSiswa->kimia }}</td>
                                                <td>{{ $nilaiSiswa->biologi }}</td>
                                                <td>{{ $nilaiSiswa->bahasa_indonesia }}</td>
                                                <td>{{ $nilaiSiswa->bahasa_inggris }}</td>
                                                <td>{{ $nilaiSiswa->keterangan }}</td>
                                                {{-- <td>
                                                    <a href="{{ route('data-nilai-siswa', $ns->id) }}" class="btn btn-success btn-sm">Analisis Nilai</a>
                                                </td> --}}
                                            </tr>
                                        </tbody>
                                        {{-- <tfoot>
                                            <tr>
                                                <td colspan="7"><b>Rata-rata</b></td>
                                                <td><b>80</b></td>
                                                <td><b>Baik</b></td>
                                            </tr>
                                        </tfoot> --}}
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
                            <form action="{{ route('simpan-hasil') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">HASIL JURUSAN </strong>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="nama_siswa" value="{{ $nilaiSiswa->siswa->nama_siswa }}" hidden>
                                    <input type="text" name="kelas" value="{{ $nilaiSiswa->kelas->nama_kelas }}" hidden>
                                    <input type="text" name="id" value="{{ $nilaiSiswa->id }}" hidden>

                                    @if ($nilaiSiswa->matematika >= 80 && $nilaiSiswa->fisika >= 60 && $nilaiSiswa->bahasa_inggris >= 85 && $nilaiSiswa->biologi >= 45 && $nilaiSiswa->kimia >= 50)
                                        <h2 class="text-center">TEKNIK KOMPUTER DAN JARINGAN</h2>
                                        <input type="text" name="hasil_jurusan" id="" value="Teknik Komputer dan Jaringan" hidden>
                                    @elseif($nilaiSiswa->matematika >= 75 && $nilaiSiswa->fisika >= 85 && $nilaiSiswa->bahasa_inggris >= 55 && $nilaiSiswa->biologi >= 35 && $nilaiSiswa->kimia >= 50) 
                                        <h2 class="text-center">TSM</h2>
                                        <input type="text" name="hasil_jurusan" id="" value="TSM" hidden>
                                    @elseif($nilaiSiswa->matematika >= 70 && $nilaiSiswa->fisika >= 45 && $nilaiSiswa->bahasa_inggris >= 70 && $nilaiSiswa->biologi >= 85 && $nilaiSiswa->kimia >= 80)
                                        <h2 class="text-center">KEPERAWATAN</h2>
                                        <input type="text" name="hasil_jurusan" id="" value="Keperawatan" hidden>
                                    @elseif($nilaiSiswa->matematika >= 60 && $nilaiSiswa->fisika >= 40 && $nilaiSiswa->bahasa_inggris >= 80 && $nilaiSiswa->biologi >= 85 && $nilaiSiswa->kimia >= 65)
                                        <h2 class="text-center">FARMASI</h2>
                                        <input type="text" name="hasil_jurusan" id="" value="Farmasi" hidden>
                                    @else
                                        <input type="text" name="hasil_jurusan" id="hasil_jurusan" value="Tidak masuk jurusan" hidden>
                                        <h2 class="text-center">NILAI TIDAK MASUK JURUSAN</h2>
                                    @endif
                                    
                                </div>
                                <button class="btn btn-primary col-md-12" type="submit">Simpan Hasil</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        
            {{-- end tabel --}}    
@endsection