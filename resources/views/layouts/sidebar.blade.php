
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            {{-- <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a> --}}
            <p class="navbar-brand">App SISWA</p>
            <a class="navbar-brand hidden">S</a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                {{-- <h3 class="menu-title">UI elements</h3><!-- /.menu-title --> --}}
                @if(Auth::user()->level == 'admin')
                <li class="active">
                    <a href="{{ route('admin.index') }}"> <i class="menu-icon fa fa-address-card"></i>Master User</a>
                </li>

                @endif
                <li class="active">
                    <a href="{{ route('daftar-nilai-siswa') }}"> <i class="menu-icon fa fa-laptop"></i>Daftar Nilai Siswa </a>
                </li>
                {{-- <li class="active">
                    <a href="{{ route('analisis-jurusan') }}"> <i class="menu-icon fa fa-line-chart"></i>Hasil Analisis </a>
                </li> --}}
                

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
