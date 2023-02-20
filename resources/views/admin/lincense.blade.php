<!DOCTYPE html>
<html lang="en">

<head>
    <title>Licenses & AMC Renewals </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="..\files\assets\images\favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\sweetalert\css\sweetalert.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap-daterangepicker\css\daterangepicker.css">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\datedropper\css\datedropper.min.css">
    <!-- Color Picker css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\spectrum\css\spectrum.css">
    <!-- Mini-color css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-minicolors\css\jquery.minicolors.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">

    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

 <!-- Data Table Css -->
 <link rel="stylesheet" type="text/css" href="..\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
 <link rel="stylesheet" type="text/css" href="..\files\assets\pages\data-table\css\buttons.dataTables.min.css">
 <link rel="stylesheet" type="text/css" href="..\files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
</head>
@include('sweetalert::alert')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        {{-- <a href="./">
                            <img class="img-fluid" src="..\files\assets\images\logo.jpg" alt="Minet Kenya" width="55%">
                        </a> --}}
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">1</span>
                                    </div>
                                    {{-- <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <div class="media">

                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul> --}}
                                </div>
                            </li>

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- <img src="..\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
                                        <span>Olala</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    {{-- <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul> --}}

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->

            <!-- Sidebar inner chat start-->
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">


                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{route('admin')}}">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>

                                </li>

                                <li class="active">
                                    <a href="{{route('request_api')}}">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Users</span>
                                    </a>
                                </li>

                            </ul>


                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header ">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Users</h4>
                                                        <span>All users on api/users</span>
                                                    </div>
                                            

                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">

                                                    <a href="{{route('add_new')}}" type="button" class="btn btn-info btn-outline-info waves-effect md-trigger"><i class="fa fa-plus"></i>Add New</i></a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Top only shadow card start -->
                                        <div class="card ">                                           
                                            <div class="card-block box-list">
                                                @if(Session::has('error'))
                                                <div class="alert alert-danger border-danger">
                                                  {{Session::get('error')}}
                                                </div>
                                              @elseif(session('Success'))
                                                <div class="alert alert-success border-success">
                                                  {{Session::get('Success')}}
                                                </div>
                                                @endif
                                                <div class="row">
                                                    
                                                            <div class="col-lg-12">
                              
                                                                <div class="dt-responsive table-responsive">
                                                                    <table id="base-style" class="table table-striped table-bordered nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Id</th>
                                                                                <th>Name</th>
                                                                                <th>Username</th>
                                                                                <th>Email</th>
                                                                                <th>Street</th>
                                                                                <th>Suit</th>
                                                                                <th>City</th>
                                                                                <th>Zipcode</th>
                                                                                <th>Latitude</th>
                                                                                <th>Longitude</th>
                                                                               
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($responses as $user)
                                                              
                                                                             {{-- {{ route('mail', $service->id); }} --}}

                                                                        
                                                                            <tr>
                                                                                <td>{{ $user->id }}</td>
                                                                                <td>{{ $user->name }}</td>
                                                                                <td>{{ $user->username }}</td>
                                                                                <td>{{ $user->email }}</td>
                                                                                <td>{{ $user->address->street }}</td>
                                                                                <td>{{ $user->address->suite }}</td>
                                                                                <td>{{ $user->address->city }}</td>
                                                                                <td>{{ $user->address->zipcode }}</td>
                                                                                <td>{{ $user->address->geo->lat }}</td>
                                                                                <td>{{ $user->address->geo->lng }}</td>

                                                                            </tr>
                                                                          
                                                                           
                                                                            @endforeach
                                 
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <th>User</th>
                                                                               
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                               
                                                                
                                                            </div>
                                                      </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header ">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Album</h4>
                                                        <span>All Album list on api/album</span>
                                                    </div>
                                            

                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">

                                                    <a href="{{route('add_new')}}" type="button" class="btn btn-info btn-outline-info waves-effect md-trigger"><i class="fa fa-plus"></i>Add New</i></a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Top only shadow card start -->
                                        <div class="card ">                                           
                                            <div class="card-block box-list">
                                                @if(Session::has('error'))
                                                <div class="alert alert-danger border-danger">
                                                  {{Session::get('error')}}
                                                </div>
                                              @elseif(session('Success'))
                                                <div class="alert alert-success border-success">
                                                  {{Session::get('Success')}}
                                                </div>
                                                @endif
                                                <div class="row">
                                                    
                                                            <div class="col-lg-12">
                              
                                                                <div class="dt-responsive table-responsive">
                                                                    <table id="base-style" class="table table-striped table-bordered nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Album Id</th>
                                                                                <th scope="col">User Id</th>
                                                                                <th scope="col">Album Title</th>
                                                                               
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($album as $user)
                                                              
                                                                             {{-- {{ route('mail', $service->id); }} --}}

                                                                        
                                                                            <tr>
                                                                                <th scope="row">{{ $user->userId }}</th>
                                                                                <td>{{ $user->id }}</td>
                                                                                <td>{{ $user->title }}</td>

                                                                            </tr>
                                                                          
                                                                           
                                                                            @endforeach
                                 
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <th>User</th>
                                                                               
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                               
                                                                
                                                            </div>
                                                      </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- <div id="styleSelector "> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script>
        function confirmation(ev){
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            Swal.fire({
                title: 'Delete?',
                text: "Are you sure you want to remove this service?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willCancel) => {
                if (willCancel.isConfirmed) {

                    window.location.href=urlToRedirect;
                // Swal.fire(
                //     Livewire.emit('deleteConfirmed')
                // )
                }
                else  {
                    Swal.fire(
                    'Cancelled',
                    'Remove request has been cancelled!',
                    'error'
                    )
                }
                
        })
        }
         
      
    
        </script>

     <!-- Required Jquery -->
     <script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
     <script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
     <script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
     <script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
     <!-- jquery slimscroll js -->
     <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
     <!-- modernizr js -->
     <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
     <script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>
 
     <!-- data-table js -->
     <script src="..\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
     <script src="..\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
     <script src="..\files\assets\pages\data-table\js\jszip.min.js"></script>
     <script src="..\files\assets\pages\data-table\js\pdfmake.min.js"></script>
     <script src="..\files\assets\pages\data-table\js\vfs_fonts.js"></script>
     <script src="..\files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
     <script src="..\files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
     <script src="..\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
     <script src="..\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
     <script src="..\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
     <!-- i18next.min.js -->
     <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
     <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
     <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
     <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
     <!-- Custom js -->
     <script src="..\files\assets\pages\data-table\js\data-table-custom.js"></script>
     <script src="..\files\assets\js\pcoded.min.js"></script>
     <script src="..\files\assets\js\vartical-layout.min.js"></script>
     <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
     <script type="text/javascript" src="..\files\assets\js\script.js"></script>
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
 
   gtag('config', 'UA-23581568-13');
 </script>
 </body>
 
 </html>
 