<div class="header-menu">

    <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        <div class="header-left">
        </div>
    </div>

    <div class="col-sm-5">
        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle" src="\images/admin.jpg" alt="User Avatar">
            </a>

            <div class="user-menu dropdown-menu">

                <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a>
            </div>
        </div>

        <div class="language-select dropdown" id="language-select">
            <p class="dropdown-toggle" aria-haspopup="true" aria-expanded="true">
                {{ Auth::user()->name }}
            </p>
        </div>

    </div>
</div>