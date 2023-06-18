<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LinkFacil | Pedido de mercadoria</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
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
            <a href="../../index.html" class="brand-link">
                <img src="../../dist/img/Masterlogo2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">LinkFácil</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Catálogo
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Operações</li>
                        <li class="nav-item">
                            <a href="pedido.php" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Pedido
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/operacoes/pedido.php" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Comodato
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
                            <h1>Carrinho</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../index.html">Inicio</a></li>
                                <li class="breadcrumb-item active">Carrinho</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Itens do pedido</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <form method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Produtos</label>
                                                <input type="text" name="modelo" id="inputEstimatedBudget"
                                                    class="form-control" placeholder="Gelo escama" readonly>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Valor</label>
                                                <input type="number" name="modelo" id="inputEstimatedBudget"
                                                    class="form-control" readonly>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Quantidades</label>
                                                <input type="number" name="armazenamento" class="form-control">
                                            </div>
                                        </div>

                                        </imput>

                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <input type="text" name="modelo" id="inputEstimatedBudget"
                                                    class="form-control" placeholder="Gelo tubo" readonly>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <input type="number" name="modelo" id="inputEstimatedBudget"
                                                    class="form-control" readonly>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <input type="number" name="armazenamento" class="form-control">
                                            </div>
                                        </div>

                                        </imput>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <input type="text" name="modelo" id="inputEstimatedBudget"
                                                    class="form-control" placeholder="Gelo barra" readonly>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <input type="number" name="modelo" id="inputEstimatedBudget"
                                                    class="form-control" readonly>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <input type="number" name="armazenamento" class="form-control">
                                            </div>
                                        </div>

                                        </imput>
                                    </div>


                                </div>
                            </form>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Local de entrega</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <form method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Endereço</label>
                                                <input type="text" name="modelo" id="inputEstimatedBudget"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Número</label>
                                                <input type="number" name="armazenamento" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Bairro</label>
                                                <input type="text" name="memoria" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Cidade</label>
                                                <input type="text" name="memoria" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">UF</label>
                                                <input type="text" name="memoria" class="form-control">
                                            </div>
                                        </div>
                                        </imput>

                                    </div>
                                    <div class="bg-gray py-2 px-3 mt-4">
                                        <h2 class="mb-0">
                                            R$ 80.00
                                        </h2>
                                        <h4 class="mt-0">
                                            <small>Total com taxa: R$80.00 </small>
                                        </h4>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" value="Finalizar"
                                                class="btn btn-success float-right m-1">
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
            <!-- /.content -->


            <!-- /.content-wrapper -->
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">

        </div>
        <strong>Copyright &copy; 2023 <a href="#">LinkFácil</a>.</strong> Todos os direitos reservados
    </footer>

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
    <!-- jquery-validation -->
    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $.validator.setDefaults({
            submitHandler: function() {
                alert("Form successful submitted!");
            }
        });
        $('#quickForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
    </script>
</body>

</html>