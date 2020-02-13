<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | DIU_FOODIE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('asset/back/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('asset/back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('asset/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('asset/back/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('asset/back/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('asset/back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('asset/back/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('asset/back/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layout.back.navbar')
        @include('layout.back.sidebar')
        <div class="content-wrapper">
            @include('layout.back.navlink')


            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Add New Food</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tile</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title ...">
                                        </div>

                                    </div>
                                    <form role="form">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Food Name</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Food  Name ...">
                                            </div>

                                        </div>
                                        <div class="card-body" data-select2-id="44">
                                            <label>Category</label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option selected="selected" data-select2-id="3">Category</option>
                                                <option data-select2-id="45">Alaska</option>
                                                <option data-select2-id="46">California</option>
                                                <option data-select2-id="47">Delaware</option>
                                                <option data-select2-id="48">Tennessee</option>
                                                <option data-select2-id="49">Texas</option>
                                                <option data-select2-id="50">Washington</option>
                                            </select>
                                        </div>
                                        <div class="card-body" data-select2-id="44">
                                            <label>Meal Type</label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option selected="selected" data-select2-id="3">Meal Type</option>
                                                <option data-select2-id="45">Alaska</option>
                                                <option data-select2-id="46">California</option>
                                                <option data-select2-id="47">Delaware</option>
                                                <option data-select2-id="48">Tennessee</option>
                                                <option data-select2-id="49">Texas</option>
                                                <option data-select2-id="50">Washington</option>
                                            </select>
                                        </div>
                                        <div class="card-body" data-select2-id="44">
                                            <label>Restaurant Name</label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option selected="selected" data-select2-id="3">Restaurant Name</option>
                                                <option data-select2-id="45">Alaska</option>
                                                <option data-select2-id="46">California</option>
                                                <option data-select2-id="47">Delaware</option>
                                                <option data-select2-id="48">Tennessee</option>
                                                <option data-select2-id="49">Texas</option>
                                                <option data-select2-id="50">Washington</option>
                                            </select>
                                        </div>
                                        <div class="card-body" data-select2-id="44">
                                            <label>Price</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">&#2547;</span>
                                                </div>
                                                <input type="text" class="form-control">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="20" placeholder="Description About food ..."></textarea>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Food Image</label>
                                                <div class="form-group">

                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>



    <section class="content">
        <div class="container-fluid">
        </div>
    </section>
    </div>

    @include('layout.back.footer')


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('asset/back/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('asset/back/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('asset/back/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('asset/back/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('asset/back/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('asset/back/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('asset/back/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('asset/back/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('asset/back/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('asset/back/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('asset/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('asset/back/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('asset/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('asset/back/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('asset/back/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('asset/back/dist/js/demo.js') }}"></script>
</body>

</html>