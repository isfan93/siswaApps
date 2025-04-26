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
                                    {{-- <strong class="card-title">NAMA SISWA</strong> --}}
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">
                                        
                                        </h3>
                                        <div>
                                        <a href="{{ route('admin.index') }}" class="btn btn-info btn-sm">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Data</strong> User
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="{{ route('tambah-user') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                   @csrf
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="name" class=" form-control-label">Nama</label></div>
                                                        <div class="col-12 col-md-6"><input type="text" id="name" name="name" placeholder="Nama" class="form-control"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="username" class=" form-control-label">Username</label></div>
                                                        <div class="col-12 col-md-4"><input type="text" id="username" name="username" placeholder="Username" class="form-control"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="password" class=" form-control-label">Password</label></div>
                                                        <div class="col-12 col-md-4"><input type="password" id="password" name="password" placeholder="Password" class="form-control"></div>
                                                    </div>
                                                    {{-- <div class="row form-group">
                                                        <div class="col col-md-2"><label for="level" class=" form-control-label">level</label></div>
                                                        <div class="col-12 col-md-4"><input type="level" id="level" name="level" placeholder="Level" class="form-control"></div>
                                                    </div> --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="level" class=" form-control-label">Level</label></div>
                                                        <div class="col-12 col-md-4">
                                                            <select name="level" id="level" class="form-control">
                                                                <option value="">Please select</option>
                                                                <option value="admin">Admin</option>  
                                                                <option value="user">User</option>  
                                                            </select>
                                                        </div>
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