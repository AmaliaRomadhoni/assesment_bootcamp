<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Perkuliahan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admintemplate') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admintemplate') }}/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admintemplate') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('admintemplate') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('admintemplate') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    @vite(['resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="#" class="brand-link">
                        <img src="{{ asset('admintemplate') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                            class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">Amalia R</span>
                    </a>
        
                    <!-- Sidebar -->
                    <x-sidebar></x-sidebar>
                    <!-- /.sidebar -->
                </aside>

        <!-- Navbar -->
        

        <!-- Main Sidebar Container -->
       
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content" id="app">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

       
            
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('admintemplate') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admintemplate') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admintemplate') }}/dist/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admintemplate') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('admintemplate') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
</body>

</html>