<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>" class="csrf">
  <title>Product Categories</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/CSS/sweetalert2.min.css">
  <link rel="stylesheet" href="/datatable/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="/datatable/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/CSS/admin.css">

</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="40" viewBox="0 0 167 64">
          <text id="GUSHI" transform="translate(0 51)" fill="#D0D9DD" font-size="57" font-family="Philosopher-Regular, Philosopher">
            <tspan x="0" y="0">GUSHI</tspan>
          </text>
        </svg>
      </div>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <li class="nav-header">Quick Links</li>
                <li class="nav-item">
                  <a href="<?= site_url('Admin/Categories') ?>" class="nav-link">
                    <i class="fa fa-list"></i>
                    <p>
                      Item Categories
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/gallery.html" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Gallery
                    </p>
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
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Add/Edit Product Categories</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h3>Categories</h3>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover tanle-striped table-bordered" id="category_table">
                      <thead>
                        <tr>
                          <th>Category ID</th>
                          <th>Category Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="category_data"></tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-header">Add a new Category</div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Category Name</label>
                    <input class="form-control" id="category_name" name="category_name" placeholder="Enter new Category" type="text">
                    <span id="error_name" class="text-danger error-text category_name_error"></span>
                  </div>
                  <div class="form-group">
                    <button id="new-category" class="btn btn-block btn-success">Save</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <script src="/Javascript/sweetalert2.min.js"></script>
  <script src="/datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="/Javascript/app.js"></script>
  <script>
    $(document).ready(function() {
      loadCategories();

      $("#new-category").click(function() {
        var category_name = $("#category_name").val();
        if (category_name == "") {
          $("#error_name").html("Please enter a Category Name");
        } else {
          var data = {
            'category_name': category_name
          }
          $.ajax({
            url: "<?php echo base_url('Admin/addCategories') ?>",
            method: "POST",
            data: {
              category_name: category_name
            },
            success: function(response) {
              if (response == 1) {
                $("#error_name").html("");
                $("#category_name").val("");

                $('.category_data').html("");
                loadCategories();
              } else {
                $("#error_name").html("Category already exists");
              }
            }

          });
        }
      });

      function loadCategories() {
        $.ajax({
          url: "<?php echo base_url('Admin/getCategories') ?>",
          method: "GET",
          success: function(response) {
            $.each(response.categories, function(key, value) {
              $('#category_table').append(
                "<tr>" +
                "<td>" + value.category_id + "</td>" +
                "<td>" + value.category_name + "</td>" +
                "<td><button class='btn btn-danger btn-sm delete-category' data-id='" + value.category_id + "'>Delete</button></td>" +
                "</tr>"
              );

            });
          }

        });
      }
    })
  </script>
</body>

</html>