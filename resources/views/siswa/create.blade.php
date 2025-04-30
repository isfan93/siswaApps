@extends('layouts.admin')
@section('title', 'Masukan Data Siswa')
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
                                    <strong class="card-title">NAMA SISWA</strong>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">
                                        
                                        </h3>
                                        <div>
                                        <a href="{{ route('daftar-nilai-siswa') }}" class="btn btn-info btn-sm">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Data</strong> Siswa
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="{{ route('tambah-data-siswa') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                   @csrf
                                                   <div class="row form-group">
                                                       <div class="col col-md-2"><label for="nama_siswa" class=" form-control-label">Nama Siswa</label></div>
                                                       <div class="col-12 col-md-6"><input type="text" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" class="form-control" value="{{ old('nama_siswa') }}"></div>
                                                   </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="nisn" class=" form-control-label">NISN</label></div>
                                                        <div class="col-12 col-md-4"><input type="text" id="nisn" name="nisn" placeholder="NISN Siswa" class="form-control" value="{{ old('nisn') }}"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="jenis_kelamin" class=" form-control-label">Jenis Kelamin</label></div>
                                                        <div class="col-12 col-md-4">
                                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                                <option value="0">Please select</option>
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row form-group">
                                                        <div class="col col-md-2"><label for="tanggal_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                                        <div class="col-12 col-md-6"><input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" cols="20" rows="10" value={{ old('tanggal_lahir') }}></input></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="alamat" class=" form-control-label">Alamat</label></div>
                                                        <div class="col-12 col-md-6"><textarea class="form-control" name="alamat" id="alamat" cols="20" rows="10" value={{ old('alamat') }}></textarea></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="no_telp" class=" form-control-label">No. Telepon</label></div>
                                                        <div class="col-12 col-md-6"><input type="text" id="no_telp" name="no_telp" placeholder="No Telp Siswa" class="form-control" value={{ old('no_telp') }}></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="email" class=" form-control-label">Email</label></div>
                                                        <div class="col-12 col-md-6"><input type="email" id="email" name="email" placeholder="Email Siswa" class="form-control" value="{{ old('email') }}"></div>
                                                    </div> --}}
                                                    {{-- <div class="row form-group">
                                                        <div class="col col-md-2"><label for="file-input" class=" form-control-label">Foto</label></div>
                                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                                    </div> --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="kelas_id" class=" form-control-label">Kelas</label></div>
                                                        <div class="col-12 col-md-4">
                                                            <select name="kelas_id" id="kelas_id" class="form-control">
                                                                <option value="0">Please select</option>
                                                                @foreach ($kelass as $kelas)
                                                                <option value="{{ $kelas->id }}" {{ old('kelas_id') == $kelas->id ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>    
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Nilai</strong> Pelajaran
                                                </div>
                                                <div class="card-body card-block">
                                                        <div class="row">
                                                            <div class="col-md-6">

                                                                {{-- <div class="card-body">
                                                                    @foreach($mataPelajarans as $mapel)
                                                                    <div class="row form-group">
                                                                        <div class="col col-md-3"><label for="nilai_{{ $mapel->id }}" class=" form-control-label">{{ $mapel->nama }}</label></div>
                                                                        <div class="col-12 col-md-6"><input type="number" id="nilai_{{ $mapel->id }}" name="nilai[{{ $mapel->id }}]"  
                                                                            min="0" max="100" required placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                                    </div>
                                                                    @endforeach
                                                                </div> --}}




                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Matematika</label></div>
                                                                    <div class="col-12 col-md-6"><input type="number" id="text-input" name="matematika" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fisika</label></div>
                                                                    <div class="col-12 col-md-6"><input type="number" id="text-input" name="fisika" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kimia</label></div>
                                                                    <div class="col-12 col-md-6"><input type="number" id="text-input" name="kimia" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Biologi</label></div>
                                                                    <div class="col-12 col-md-6"><input type="number" id="text-input" name="biologi" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">B.Inggris</label></div>
                                                                    <div class="col-12 col-md-6"><input type="number" id="text-input" name="bahasa_inggris" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        {{-- <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                                                                    <div class="col-12 col-md-6"><input type="date" id="text-input" name="tanggal" placeholder="Nilai..." class="form-control form-control-sm" value="{{ now()->format('Y-m-d') }}"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterangan</label></div>
                                                                    
                                                                    <div class="col-12 col-md-6"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control form-control-sm"></div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end tabel --}}    
@endsection