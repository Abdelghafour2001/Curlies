<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curlies Hall-Admin Page</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    @if(!Session::has('adminData'))
<script type="text/javascript">
    window.location.href="{{url('admin/login')}}";
</script>
@endif
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:rgb(234,115,143);">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CH Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('admin/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Posts</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Posts :</h6>
                        <a class="collapse-item" href="{{url('admin/post/create')}}">Ajouter Post</a>
                        <a class="collapse-item" href="{{url('admin/post')}}">Afficher les Posts</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Categories</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Categories :</h6>
                        <a class="collapse-item" href="{{url('admin/category/create')}}">Ajouter Categorie</a>
                        <a class="collapse-item" href="{{url('admin/category')}}">Afficher les Categories</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/comments')}}">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Commentaires</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/users')}}">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Users</span></a>
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

            

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>                       
                        </li>                       
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/post')}}">Posts</a>
                        </li>
                        <li class="breadcrumb-item active">Ajouter</li>
                    </ol>
                    <div class="card mb-3">
                        <div class="card-header">
                        <i class="fas fa-table"></i> Ajouter Posts<a href="{{url('admin/post')}}" class="float-right btn btn-sm " style="background-color:rgb(234,115,143);color:white;">Afficher tout</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if($errors)
                            @foreach($errors->all() as $error)
                            <h3 class="h4 text-gray-900 mb-4">{{$error}}</h3>
                            @endforeach
                            @endif

                            @if(Session::has("success"))
                            <h3 class="h4 text-success">{{session('success')}}</h3>
                            @endif
                        <form method="post" action="{{url('admin/post/'.$data->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Category</th> 
                                    <td><select class="form-control" name='category'>
@foreach($cats as $cat)
@if($cat->is==$data->cat_id)
<option selected value="{{$cat->id}}">{{$cat->title}}</option>
@else
<option  value="{{$cat->id}}">{{$cat->title}}</option>
@endif
@endforeach
                                    </select></td>
</tr>
                                <tr>
                                    <th>Titre</th>
                                    <td><input type="text" value="{{$data->title}}" name='title' class="form-control" /></td>
</tr>
<tr>
                                    <th>Thumbnail</th>
                                    <td>
                                        <p class='my-2'><img width='80' src="{{ asset('imgs/'.$data->thumb)}}" /></p>
                                        <input type="hidden" value="{{$data->thumb}}" name="post_thumb"/>
                                        <input type="file"  name="post_thumb"/>
                                    </td>
</tr>
<tr>
                                    <th>Image du post</th>
                                    <td>
                                        <p class='my-2'><img width='80' src="{{ asset('imgs/'.$data->full_img)}}" /></p>
                                        <input type="hidden" value="{{$data->full_img}}" name="post_image"/>
                                        <input type="file"  name="post_image"/>
                                    </td>
</tr>
<tr>
                                    <th>Detail</th>
                                    <td><textarea  name='detail'  class="form-control">{{$data->detail}}</textarea></td>
</tr>
<tr>
<th>Tags</th>
                                    <td><textarea  name='tags'  class="form-control">{{$data->tags}}</textarea></td>

<tr>
                                   
                                    <td colspan="2"><input type="submit" class="btn "  style="background-color:rgb(234,115,143);color:white;"/></td>
</tr>
</table>
</form>

</div>

                </div>

     <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Curlies Hall 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{url('admin/logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>