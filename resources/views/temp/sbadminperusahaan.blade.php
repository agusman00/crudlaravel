<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="/font/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/font/css/sb-admin-2.min.css" rel="stylesheet">
    <!--toastr-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-0">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{__('Admin')}}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{__('Dashboard')}}</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>{{__('Table')}}</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="/perusahaan/index">{{__('Perusahaan')}}</a>
                        <a class="collapse-item" href="/">{{__('Karyawan')}}</a>
                    </div>
                </div>
            </li>

            <!--tt-->
            @if(app()->getLocale()=='id')
                <a href="{{url('locale/en')}}" class="btn btn-primary">Eng {{trans('english')}}</a>
                <a href="{{url('locale/cn')}}" class="btn btn-primary">Cn {{trans('china')}}</a>
                <a href="{{url('locale/jp')}}" class="btn btn-primary">Jp {{trans('jepang')}}</a>
                <a href="{{url('locale/id')}}" class="btn btn-primary">Id {{trans('indonesian')}}</a>
            @endif
            @if(app()->getLocale()=='en')
                <a href="{{url('locale/id')}}" class="btn btn-primary">Id {{trans('indonesian')}}</a>
                <a href="{{url('locale/cn')}}" class="btn btn-primary">Cn {{trans('china')}}</a>
                <a href="{{url('locale/jp')}}" class="btn btn-primary">Jp {{trans('jepang')}}</a>
                <a href="{{url('locale/en')}}" class="btn btn-primary">Eng {{trans('english')}}</a>
            @endif
            @if(app()->getLocale()=='cn')
                <a href="{{url('locale/id')}}" class="btn btn-primary">Id {{trans('indonesian')}}</a>
                <a href="{{url('locale/en')}}" class="btn btn-primary">Eng {{trans('english')}}</a>
                <a href="{{url('locale/jp')}}" class="btn btn-primary">Jp {{trans('jepang')}}</a>
                <a href="{{url('locale/cn')}}" class="btn btn-primary">Cn {{trans('china')}}</a>
            @endif
            @if(app()->getLocale()=='jp')
                <a href="{{url('locale/id')}}" class="btn btn-primary">Id {{trans('indonesian')}}</a>
                <a href="{{url('locale/en')}}" class="btn btn-primary">Eng {{trans('english')}}</a>
                <a href="{{url('locale/cn')}}" class="btn btn-primary">Cn {{trans('china')}}</a>
                <a href="{{url('locale/jp')}}" class="btn btn-primary">Jp {{trans('jepang')}}</a>
            @endif

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>{{__('Pages')}}</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/log/myaccountk">{{__('My profile')}}</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">{{__('Other Pages :')}}</h6>
                        <a class="collapse-item" href="/404">{{__('Setting Akun')}}</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            {{__('Logout')}}
                        </a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="{{__('Search for...')}}"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    {{__('Alerts Center')}}
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{__('December 12, 2019')}}</div>
                                        <span class="font-weight-bold">{{__('A new monthly report is ready to download!')}}</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{__('December 7, 2019')}}</div>
                                        {{__('$290.29 has been deposited into your account!')}}
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{__('December 2, 2019')}}</div>
                                        {{__('Spending Alert: Weve noticed unusually high spending for your account.')}}
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">{{__('Show All Alerts')}}</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    {{__('Message Center')}}
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">{{__('Hi there! I am wondering if you can help me with a problem I ve been having.')}}</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">{{__('I have the photos that you ordered last month, how would you like them sent to you?')}}</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>

                                <a class="dropdown-item text-center small text-gray-500" href="#">{{__('Read More Messages')}}</a>
                            </div>
                        </li>

                        <!--t-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-gray-600" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            {{__('Country')}}</a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a href="#" style="margin-left: 10px" > {{__('IDONESIAN')}}</a><br>
                                <a href="{{url('locale/en')}}" style="margin-left: 10px" > {{__('ENGLISH')}}</a><br>
                                <a href="#" style="margin-left: 10px" > {{__('CHINA')}}</a><br>
                                <a href="#" style="margin-left: 10px" > {{__('JEPANG')}}</a>
                            </div>



                        </li>

                        <!--t-->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="/font/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{__('Profile')}}
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{__('Settings')}}
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{__('Activity Log')}}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/login" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{__('Logout')}}
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <!--Content Area-->
                @yield('container')
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Ready to Leave?')}}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">{{__('Select Logout below if you are ready to end your current session.')}}</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">{{__('Cancel')}}</button>
                    <a class="btn btn-primary" href="/logout">{{__('Logout')}}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/font/vendor/jquery/jquery.min.js"></script>
    <script src="/font/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/font/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/font/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/font/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/font/js/demo/chart-area-demo.js"></script>
    <script src="/font/js/demo/chart-pie-demo.js"></script>
    <!-- Fontawesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <!--jquery-->
        <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous">
        </script>

    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>
<!--alert-->
<script>
    $('.delete').click( function()
    {
      var perusahaanname = $(this).attr('data-name');
      var id = $(this).attr('data-id');
        swal({
          title: "{{__('Are you sure?')}}",
          text: "{{__('Once deleted, you will not be able to recover this data')}} "+perusahaanname+" {{__('file!')}}",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/perusahaan/delete/"+id+""
            swal("{{__('It worked! File')}} "+perusahaanname+" {{__('has been deleted!')}}", {
              icon: "success",
            });
          } else {
            swal("{{__('Your imaginary file is safe!')}}");
          }
        });
    });
</script>

    <script>
      @if (Session::has('success'))
        toastr.success("{{session::get('success')}}")
      @endif
    </script>

</html>
