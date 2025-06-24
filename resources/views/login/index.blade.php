<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    {{-- Sweetalert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h3 style="color: white">LOGIN</h3>
                    {{-- <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a> --}}
                </div>
                <div class="login-form">
                    <form action="{{ route('login.proses') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="username" class="form-control" placeholder="Username" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                        </div>
                                {{-- <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                                </div> --}}
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30 rounded">Sign in <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                                {{-- <a href="/dashboard" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in></a> --}}
                                {{-- <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                </div> --}}
                    </form>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-6">
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
                        
                    {{-- <div class="card">
                        <div class="card-header">
                            <h3>Tabel Hasil Analisis Jurusan</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="search" type="text" class="form-control form-control-sm" placeholder="Search...">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-sm btn-primary px-3 rounded"> <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            </form>
                            <br>
                            <table class="table table-striped table-bordered">
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
                                        <td>{{ $datas->keterangan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dataAns->links() }}
                        </div>
                    </div> --}}
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <di class="card-header">
                            <h3>Diagram Hasil Analisis Jurusan</h3>
                        </di>
                        <div class="card-body">
                            <div class="content mt-3">
                                <div class="animated fadeIn">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3">Pie Chart</h4>
                                            <canvas id="pieChart"></canvas>
                                        </div>
                                    </div>
                                        <div id="csiswa" data-labels="{{ json_encode($csiswa) }}" style="display: none"></div>
                                        <div id="nsiswa" data-values="{{ json_encode($nsiswa) }}" style="display: none"></div>
                
                                </div>
                                <!-- .animated -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="\vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="\assets/js/init-scripts/chart-js/chartjs-init.js"></script>
    

    @if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 3000
    });
</script>
@endif


@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}',
        showConfirmButton: true
    });
</script>
@endif


</body>

</html>
