<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php $this->titre = "finDePeriode"; ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">
        <?php require 'Vue/_Commun/headerPrinc.php'; ?>
        <?php require 'Vue/_Commun/navPrinc.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-8">

                        <div class="box box-warning">

                            <div class="box-body">
                                <h4><b><?= $student['name'] ?>   <?= $student['firstName'] ?></b></h4>
                                <form action="admin/exeMonterDeCeinture/<?= $id ?>"class="form-horizontal form-label-left" method="post">
                                    <div class="box-header with-border">
                                        <?php if ($periodactuel['period'] == "Noël"): ?>
                                            <h3 class="box-title">Le  badge  de l'étudiant à la période de Toussaint était <b><?= $badgeToussaint['periode'] ?></b>.
                                                <br>
                                                <br>
                                                <?php if ($badgeNoel['periode'] == ""): ?>
                                                    Mettez-le à jour si son évaluation est positive.
                                                <?php else: ?>
                                                    Le badge de l'étudiant à la période de <?= $periodactuel['period'] ?> est <?= $badgeNoel['periode'] ?>.
                                                    <br>
                                                    <br>


                                                    Mettez-le à jour si son évaluation est positive.
                                                <?php endif; ?>
                                            <?php elseif ($periodactuel['period'] == "Pâques"): ?>
                                                <h3 class="box-title">Le  badge  de l'étudiant à la période de Noël était <b><?= $badgeNoel['periode'] ?></b>.
                                                    <br>
                                                    <br>
                                                    <?php if ($badgePaques['periode'] == ""): ?>
                                                        Mettez-le à jour si son évaluation est positive.
                                                    <?php else: ?>
                                                        Le badge de l'étudiant à la période de <?= $periodactuel['period'] ?> est <?= $badgePaques['periode'] ?>.
                                                        <br>
                                                        <br>

                                                        Mettez-le à jour si son évaluation est positive.
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <h3 class="box-title">Le  badge  de l'étudiant à la période de Pâques était <b><?= $badgePaques['periode'] ?></b>.
                                                        <br>
                                                        <br>
                                                        <?php if ($badgeJuin['periode'] == ""): ?>
                                                            Mettez-le à jour si son évaluation est positive.
                                                        <?php else: ?>
                                                            Le badge de l'étudiant à la période de <?= $periodactuel['period'] ?> est <?= $badgeJuin['periode'] ?>.
                                                            <br>
                                                            <br>
                                                            Mettez-le à jour si son évaluation est positive.
                                                        <?php endif; ?>

                                                    <?php endif; ?>
                                                </h3>
                                                </div>
                                                <div class="box-body">

                                                    <div class="form-group">
                                                        <span class="form-group-addon">Monter de Ceinture</span>
                                                        <select class="form-control"  name="ceinture" type="text">
                                                            <option>Blanc</option>
                                                            <option>Bleu</option>
                                                            <option>Jaune</option>

                                                            <option>Orange</option>
                                                            <option>Violet</option>
                                                            <option>Vert</option>

                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-10">

                                                            <button type="submit" class="btn btn-warning">Modifier</button>
                                                        </div>
                                                    </div>

                                                    </form>

                                                </div>
                                                </div>
                                                </div>
                                                </div>

                                                </section>
                                                <!-- /.content -->
                                                </div>
                                                <!-- /.content-wrapper -->
                                                <?php require 'Vue/_Commun/Folder.php'; ?>
                                                <?php require 'Vue/_Commun/Aside.php'; ?>

                                                <!-- /.control-sidebar -->
                                                <!-- Add the sidebar's background. This div must be placed
                                                     immediately after the control sidebar -->
                                                <div class="control-sidebar-bg"></div>
                                                </div>
                                                <!-- ./wrapper -->

                                                <!-- jQuery 2.2.3 -->
                                                <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
                                                <!-- jQuery UI 1.11.4 -->
                                                <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
                                                <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                                                <script>
                                                    $.widget.bridge('uibutton', $.ui.button);
                                                </script>
                                                <!-- Bootstrap 3.3.6 -->
                                                <script src="bootstrap/js/bootstrap.min.js"></script>
                                                <!-- Morris.js charts -->
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
                                                <script src="plugins/morris/morris.min.js"></script>
                                                <!-- Sparkline -->
                                                <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
                                                <!-- jvectormap -->
                                                <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
                                                <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                                                <!-- jQuery Knob Chart -->
                                                <script src="plugins/knob/jquery.knob.js"></script>
                                                <!-- daterangepicker -->
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
                                                <script src="plugins/daterangepicker/daterangepicker.js"></script>
                                                <!-- datepicker -->
                                                <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
                                                <!-- Bootstrap WYSIHTML5 -->
                                                <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
                                                <!-- Slimscroll -->
                                                <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
                                                <!-- FastClick -->
                                                <script src="plugins/fastclick/fastclick.js"></script>
                                                <!-- AdminLTE App -->
                                                <script src="dist/js/app.min.js"></script>
                                                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                                                <script src="dist/js/pages/dashboard.js"></script>
                                                <!-- AdminLTE for demo purposes -->
                                                <script src="dist/js/demo.js"></script>
                                                <script>
                                                    $('#datepicker').datepicker({
                                                        autoclose: true
                                                    });</script>
                                                <script>
                                                    $('#datepicker1').datepicker({
                                                        autoclose: true
                                                    });</script>
                                                </body>

