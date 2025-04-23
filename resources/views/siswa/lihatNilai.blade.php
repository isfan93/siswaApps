@extends('layouts.admin')
@section('title', 'Masukan Nilai Siswa')
@section('content')

            <div class="breadcrumbs">
                
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>@yield('title')</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <a href="{{ route('daftar-siswa') }}" class="btn btn-info btn-sm"><li class="active">Kembali</li></a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            {{-- table --}}
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <form action="{{ route('simpan-nilai') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf --}}
                            <div class="card">
                                <div class="card-header">
                                    <label for="">Nama : </label><strong class="card-title"> {{ $siswa->nama_siswa }}</strong><br> 
                                    
                                    <label for="">Kelas : </label><strong class="card-title"> {{ $siswa->kelas->nama_kelas }}</strong>
                                    
                                    
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Nilai</strong> Pelajaran
                                            </div>
                                            <div class="card-body card-block">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Matematika</label></div>
                                                                <div class="col-12 col-md-6"><input readonly value="{{ $siswa->matematika }}" type="number" id="text-input" name="matematika" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fisika</label></div>
                                                                <div class="col-12 col-md-6"><input readonly value="{{ $siswa->fisika }}" type="number" id="text-input" name="fisika" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kimia</label></div>
                                                                <div class="col-12 col-md-6"><input readonly value="{{ $siswa->kimia }}" type="number" id="text-input" name="kimia" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Biologi</label></div>
                                                                <div class="col-12 col-md-6"><input readonly value="{{ $siswa->biologi }}" type="number" id="text-input" name="biologi" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                            {{-- <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">B.Indonesia</label></div>
                                                                <div class="col-12 col-md-6"><input readonly value="{{ $siswa->bahasa_indonesia }}" type="number" id="text-input" name="bahasa_indonesia" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div> --}}
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">B.Inggris</label></div>
                                                                <div class="col-12 col-md-6"><input readonly value="{{ $siswa->bahasa_inggris }}" type="number" id="text-input" name="bahasa_inggris" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    
                                            </div>
                                            {{-- <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Analisa Nilai
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- end tabel --}}    
@endsection