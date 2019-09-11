<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Miminium Admin Template v.1">
        <meta name="author" content="Isna Nur Azis">
        <meta name="keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Envios México</title>
        <!-- start: Css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css'); ?>">
        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/font-awesome.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/simple-line-icons.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/datatables.bootstrap.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/animate.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/select2.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/fullcalendar.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/bootstrap-material-datetimepicker.css') ?>"/>
        <link href="<?php echo base_url('asset/css/style.css') ?>" rel="stylesheet">
        
        
        <!-- Noty css -->
        <link rel="stylesheet" href="<?php echo base_url('asset/js/alertifyjs/css/alertify.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/js/alertifyjs/css/themes/default.css') ?>">

        <!-- end: Css -->
        <link rel="shortcut icon" href="<?php echo base_url('asset/img/logomi.png') ?>">
        
        

        <script src="<?php echo base_url('asset/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/js/jquery.ui.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/js/plugins/select2.full.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/js/plugins/moment.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/js/plugins/jquery.knob.js') ?>"></script>
        <script src="<?php echo base_url('asset/js/plugins/ion.rangeSlider.min.js') ?>"></script>        
        <script src="<?php echo base_url('asset/js/plugins/bootstrap-material-datetimepicker.js') ?>"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="mimin" class="dashboard">
        <!-- start: Header -->
        {header}
        <!-- end: Header -->
        <div class="container-fluid mimin-wrapper">
            <!-- start:Left Menu -->
            <?= $left_panel ?>
            <!-- end: Left Menu -->
            <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Advertencia!</h4>
                <p>Necesita tener javascript activado en su navegador para el correcto funcionamiento de este sitio.</p>
            </div>
            </noscript>   
            <div id="content">
                <!-- start: dir -->   
                {dir}
                <!-- end: dir -->   
                <!-- start: Content -->           
                {content}
                <!-- end: content -->
            </div>
        </div>
        <!-- start: Javascript -->

        <!-- plugins -->
        <script src="<?php echo base_url('asset/js/plugins/moment.min.js') ?>"></script>

        <script src="<?php echo base_url('asset/js/plugins/jquery.datatables.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/js/plugins/datatables.bootstrap.min.js') ?>"></script>

        <script src="<?php echo base_url('asset/js/plugins/fullcalendar.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/js/plugins/jquery.nicescroll.js') ?>"></script>
       
        <script src="<?php echo base_url('asset/js/plugins/chart.min.js') ?>"></script>
        

          <!-- Alertify -->
        <script src="<?php echo base_url('asset/js/alertifyjs/alertify.js') ?>"></script>

        <!-- custom -->
        <script src="<?php echo base_url('asset/js/main.js') ?>"></script>
        <script type="text/javascript">
           $(document).ready(function () {
              
<?php if ($this->session->flashdata('type') == 'success'): ?>
                    var msg = "<?php echo $this->session->flashdata('msg') ?>";
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(msg);
<?php endif ?>
<?php if ($this->session->flashdata('type') == 'error'): ?>
                    var msg = "<?php echo $this->session->flashdata('msg') ?>";
                    alertify.error(msg);
<?php endif ?>
            });
        </script>

        <!-- end: Javascript -->
    </body>


</html>