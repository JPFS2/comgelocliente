<?php 
require '../../action/config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM empresa where codempresa = 1");

if($sql->rowCount() ){
    $lista = $sql->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MasterPDV | Empresa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
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

                <!-- Messages Dropdown Menu -->

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
                <span class="brand-text font-weight-light">PDV</span>
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
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Cadastros
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="empresa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Empresa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="validation.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Usuários</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="clientes.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="produto.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Produtos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="fornecedor.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fornecedores</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Operações
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Entrada de mercadoria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Venda de produtos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Despesas</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="../trocas/trocasgarantias.html" class="nav-link">
                                <i class="nav-icon fas fa-3x fa-sync-alt"></i>
                                <p>
                                    Trocas e Garantias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Relatórios
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Entrada de mercadoria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Venda de produtos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Despesas</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Caixa
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
                            <h1>Cadastro de Empresa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../index.html">Inicio</a></li>
                                <li class="breadcrumb-item active">Empresa</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="col-md">
                        <div class="card card-secondary">

                            <div class="card-header">
                                <h3 class="card-title">Dados Basicos</h3>
                                <div class="card-tools">

                                </div>
                            </div>
                            <form action="../../action/adicionarE.php" method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <imput type="hidden" value="<?= $lista['codempresa']?>">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Razão social</label>
                                                    <input type="text" name="razao" id="inputEstimatedBudget"
                                                        class="form-control" value="<?= $lista['razao']?>">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Nome Fantasia</label>
                                                <input type="text" name="fantasia" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['fantasia']?>">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">CNPJ</label>
                                                <input type="text" name="cnpj" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['cnpj']?>">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">IE</label>
                                                <input type="text" name="ie" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['ie']?>">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">IM</label>
                                                <input type="text" name="im" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['im']?>">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Telefone Fixo</label>
                                                <input type="text" name="tel" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['tel']?>">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Celular / Whasts APP</label>
                                                <input type="text" name="cel" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['cel']?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">CEP</label>
                                                <input type="text" name="cep" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['cep']?>">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Endereço</label>
                                                <input type="text" name="endereco" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['tel']?>">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Numero</label>
                                                <input type="text" name="numero" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['numero']?>">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Bairro</label>
                                                <input type="text" name="bairro" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['bairro']?>">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Cidade</label>
                                                <select name="cidade"
                                                    class="form-control select2bs4 select2-hidden-accessible"
                                                    style="width: 100%;" data-select2-id="21" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option selected="selected" data-select2-id="23">Juazeiro do Norte
                                                    </option>
                                                    <option data-select2-id="42">Crato</option>
                                                    <option data-select2-id="43">Barbalha</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-1">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">UF</label>
                                                <input type="text" name="uf" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['uf']?>">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Complemento</label>
                                                <input type="text" name="complemento" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['complemento']?>">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Email</label>
                                                <input type="text" name="email" id="inputEstimatedBudget"
                                                    class="form-control" value="<?= $lista['email']?>">
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Instagram</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-instagram"></i></span>
                                                    </div>
                                                    <input type="text" name="instagram" class="form-control"
                                                        value="<?= $lista['instagram']?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Facebook</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-facebook-f"></i></i></span>
                                                    </div>
                                                    <input type="text" name="facebook" class="form-control"
                                                        value="<?= $lista['facebook']?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" value="Salvar"
                                                    class="btn btn-success float-right m-1">
                                            </div>
                                        </div>
                                    </div>



                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">

            </div>
            <strong>Copyright &copy; 2023 <a href="#">PDV</a>.</strong> Todos os direitos reservados
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
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

    <script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({
            icons: {
                time: 'far fa-clock'
            }
        });

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
    </script>
</body>

</html>