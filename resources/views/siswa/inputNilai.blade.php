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
                                        <a href="{{ route('siswa') }}" class="btn btn-info btn-sm">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Nilai</strong> Pelajaran
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Matematika</label></div>
                                                                <div class="col-12 col-md-6"><input type="number" id="text-input" name="text-input" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fisika</label></div>
                                                                <div class="col-12 col-md-6"><input type="number" id="text-input" name="text-input" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kimia</label></div>
                                                                <div class="col-12 col-md-6"><input type="number" id="text-input" name="text-input" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Biologi</label></div>
                                                                <div class="col-12 col-md-6"><input type="number" id="text-input" name="text-input" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">B.Indonesia</label></div>
                                                                <div class="col-12 col-md-6"><input type="number" id="text-input" name="text-input" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">B.Inggris</label></div>
                                                                <div class="col-12 col-md-6"><input type="number" id="text-input" name="text-input" placeholder="Nilai..." class="form-control form-control-sm"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
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