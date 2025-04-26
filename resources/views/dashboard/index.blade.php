@extends('layouts.admin')
@section('title', 'Dashboard')
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
    
            <div class="content">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">{{ $siswaAll }}</span>
                        </h4>
                        <p class="text-light">Siswa</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">{{ $lk }}</span>
                        </h4>
                        <p class="text-light">Laki-laki</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">{{ $pr }}</span>
                        </h4>
                        <p class="text-light">Perempuan</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">{{ $kelasAll }}</span>
                        </h4>
                        <p class="text-light">Kelas</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Pie Chart</h4>
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <div id="csiswa" data-labels="{{ json_encode($csiswa) }}" style="display: none"></div>
                        <div id="nsiswa" data-values="{{ json_encode($nsiswa) }}" style="display: none"></div>

                        <div class="col-lg-6 text-center">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Tabel Hasil</h5>
                                </div>
                                <div class="card-body">
                                   <table class="table"> 
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jurusan</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        @foreach ($jumlahJurusan as $jj)
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $jj->nama_jurusan }}</td>
                                                <td>{{ $jj->jumlah }}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                   </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->


                    </div>
                </div>
                <!-- .animated -->
            </div>
        </div>
@endsection