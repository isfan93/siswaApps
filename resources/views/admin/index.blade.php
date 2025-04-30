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
                                        <a href="{{ route('admin.tambah') }}" class="btn btn-info btn-sm rounded"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data User</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Level</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        @foreach ($users as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->password }}</td>
                                                <td>{{ $user->level }}</td>
                                                <td>
                                                    <a href="{{ route('edit-user', $user->id) }}" class="btn btn-primary btn-sm rounded"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                                    <a href="{{ route('hapus-user', $user->id) }}" class="btn btn-danger btn-sm rounded" onclick="return confirm('Apakah yakin User {{ $user->username }} akan di hapus ?' )"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
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