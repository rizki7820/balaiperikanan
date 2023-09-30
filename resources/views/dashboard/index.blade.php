@include('dashboard.layout.header')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

     
      {{-- <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> --}}
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <center>
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> </span>
    </a>
    </center>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="#" class="d-block">Balai Perikanan Mandi Angin</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/petugas" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Petugas
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/chat" class="nav-link ">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Live Chat
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/praktek" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pengajuan Praktek
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Rekap Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="permintaan/permintaan.php" class="nav-link" data-toggle="modal" data-target="#modal-chat" >
                  <i class="nav-icon fas fa-comments"></i>
                  <p>Live Chat</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="permintaan/permintaan.php" class="nav-link" data-toggle="modal" data-target="#modal-praktek">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Pengajuan Praktek</p>
                </a>
              </li>
            </ul>
           
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  

  <div class="modal fade" id="modal-chat">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
              <h4 class="modal-title">Cetak Laporan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../laporan/laporankonfirmasifilter.php" method="post" target="_blank">
                <center><table>
                  <tr>
                    <td>
                    <div class="form-group">Dari Tanggal</div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="date" clas="form-control" name="tglAwal" required>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <div class="form-group">Sampai Tanggal</div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="date" clas="form-control" name="tglAkhir" required>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </table>                     
                </center>                     
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button> 
              <button type="submit" name="cetakkonfirmasi" class="btn btn-outline-primary" value="Cetak"><i class="fa fa-print"> Cetak Disini</i></button>

              </form>  
               </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


      <div class="modal fade" id="modal-praktek">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
              <h4 class="modal-title">Cetak Laporan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../laporan/laporankonfirmasifilter.php" method="post" target="_blank">
                <center><table>
                  <tr>
                    <td>
                    <div class="form-group">Dari Tanggal</div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="date" clas="form-control" name="tglAwal" required>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <div class="form-group">Sampai Tanggal</div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="date" clas="form-control" name="tglAkhir" required>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </table>                     
                </center>                     
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button> 
              <button type="submit" name="cetakkonfirmasi" class="btn btn-outline-primary" value="Cetak"><i class="fa fa-print"> Cetak Disini</i></button>

              </form>  
               </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


@include('dashboard.layout.footer')