
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sccms</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Members</a>
      </li>
    </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
            
        </li>

        
        
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-user"> &nbsp; {{ Auth::user()->name }}</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand"></i>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" href="#" role="button">
            <i class="fas fa-cog"></i>
            </a>
        </li>
        <!-- <a class="dropdown-item" href="{{ route('logout') }}"

onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

 {{ __('Logout') }}

</a> -->




        <li class="nav-item">
            <a class="nav-link" data-controlsidebar-slide="true" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out">Logout</i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

 @csrf

</form>
            <!-- <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="{{ route('logout') }}" role="button">
            <i class="fas fa-sign-out">Logout</i>
            </a> -->
        </li>
        </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('images/cricket.jpg') }}" alt="SCCMS" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SCCMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <!-- <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('Dashboard') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Playground Manager</p>
                </a>
              </li> -->
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Managers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('managers.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Managers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('stadiumManager') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stadium Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('playgroundManager') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Playground Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('clubManager') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Club Manager</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Members
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('members.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('members') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Members List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Membership
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('waitingApproval') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('approved') }}" class="nav-link">
                  <i class="fas fa-check nav-icon"></i>
                  <p>Approved Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('denyApproval') }}" class="nav-link">
                  <i class="fas fa-ban"></i>
                  <p>Denied Application</p>
                </a>
              </li>
              
            </ul>
          </li><li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Playground Application
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('playground.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('playground') }}" class="nav-link">
                  <i class="fas fa-check nav-icon"></i>
                  <p>All Applications</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('approvedPlay') }}" class="nav-link">
                  <i class="fas fa-check nav-icon"></i>
                  <p>Approved Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('denyApprovalPlay') }}" class="nav-link">
                  <i class="fas fa-ban"></i>
                  <p>Denied Application</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">
                <a href="{{ url('playgroundStatus') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Playground Status</p>
                </a>
              </li>
              
          <li class="nav-item">
                <a href="{{ url('users') }}" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>Users</p>
                </a>
              </li>
              
              <li class="nav-item">
                    <a href="{{ url('roles') }}" class="nav-link">
                      <i class="fas fa-user nav-icon"></i>
                      <p>Roles</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('stripe') }}" class="nav-link">
                      <i class="fas fa-wallet nav-icon"></i>
                      <p>Make Payment</p>
                    </a>
                  </li>
              
              <li class="nav-item">
                    <a href="{{ url('payments') }}" class="nav-link">
                      <i class="fas fa-wallet nav-icon"></i>
                      <p>Payments</p>
                    </a>
                  </li>
         
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
            <h1 class="m-0">Members</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
  

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">New Member</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          



<div class="row">

    
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('members.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>First Name</strong>
		            <input type="text" name="FirstName" class="form-control" placeholder="First Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Last Name</strong>
		            <input type="text" name="LastName" class="form-control" placeholder="Last Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Gender</strong>
                    <select name="Gender" id="" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Email</strong>
		            <input type="email" name="Email" class="form-control" placeholder="Email">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Country</strong>
                    
                    <select name="Country" id="" class="form-control">
                        <option value="">Select Country</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Burundi">Burundi</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Phone</strong>
		            <input type="text" name="Phone" class="form-control" placeholder="Phone">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Address</strong>
		            <input type="text" name="Address" class="form-control" placeholder="Address">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Martal Status</strong>
                    <select name="MartalStatus" id="" class="form-control">
                        <option value="">Select Martal Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Spouce">Spouce</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Membership Type</strong>
                    <select name="MembershipType" id="" class="form-control">
                        <option value="">Select Membership Type</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Roles</strong>
                    <select name="Roles" id="" class="form-control">
                        <option value="">Select Roles</option>
                        <option value="Capitain">Capitain</option>
                        <option value="Club Manager">Club Manager</option>
                    </select>
		        </div>
		    </div>
            <input type="hidden" value="2" name="Status">
		    <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div> -->
		</div>


    
    

</div>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
        
      </div>
    </div>
  </div>
  
</div>
    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="card" style="padding: 1em;">
          
<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Members List</h2>

    </div>

    <div class="pull-right" style="margin-bottom: 1em;">

        <!-- <a class="btn btn-success" href="{{ route('users.create') }}"> </a> -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
        <i class="fas fa-plus"></i> New Member
  </button> &nbsp;&nbsp;&nbsp;
  <a href="{{ url('generate-pdf') }}" class="btn btn-primary">
        <i class="fas fa-download"></i> Download
</a>

<div style=" text-align: right;">
                <input id="myInput" class="form-control col-lg-3" type="text" placeholder="Search.." style="height: 2em; margin-left: 49.5em;  margin-top: -2.3em;">
    </div>
    </div>

</div>

</div>
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@if ($message = Session::get('success'))

<div class="alert alert-success">

<p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered">
<thead>
<tr>
    <th>No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <!-- <th>Address</th> -->
    <!-- <th>Martal Status</th> -->
    <!-- <th>Membership Type</th> -->
    <!-- <th>Roles</th> -->
    <th width="190px">Action</th>
</tr>
</thead>
<tbody id="myTable">
@foreach ($members as $member)
<tr>
  <td>{{ ++$i }}</td>
  <td>{{ $member->FirstName }}</td>
  <td>{{ $member->LastName }}</td>
  <td>{{ $member->Gender }}</td>
  <td>{{ $member->Email }}</td>
  <!-- <td>{{ $member->Country }}</td> -->
  <td>{{ $member->Phone }}</td>
  <!-- <td>{{ $member->Address }}</td> -->
  <!-- <td>{{ $member->MartalStatus }}</td> -->
  <!-- <td>{{ $member->MembershipType }}</td> -->
  <!-- <td>{{ $member->Roles }}</td> -->
  <td>
        <form action="{{ route('members.destroy',$member->id) }}" method="POST">
            <!-- <a class="btn btn-info" href="{{ route('members.show',$member->id) }}">Show</a> -->
            @can('member-edit')
            <a class="btn btn-primary" href="{{ route('members.edit',$member->id) }}"> <i class="fas fa-pen"></i> Edit</a>
            @endcan


            @csrf
            @method('DELETE')
            @can('member-delete')
            <button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete</button>
            @endcan
        </form>
  </td>
</tr>
@endforeach
</tbody>
</table>

{!! $members->links() !!}

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">Sccms</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
