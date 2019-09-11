<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Taller</title>

      <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/font-awesome/css/font-awesome.min.css') ?>">  
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/Ionicons/css/ionicons.min.css') ?>">  
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/dist/css/AdminLTE.min.css') ?>">  
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/dist/css/skins/_all-skins.min.css') ?>">  
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/morris.js/morris.css') ?>">  
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/jvectormap/jquery-jvectormap.css') ?>">  
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">  
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">  
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">


        <!-- Noty css -->
        <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/alertifyjs/css/alertify.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/alertifyjs/css/themes/default.css') ?>">


        <!-- jQuery -->
        <script src="<?php echo base_url('recursos/bower_components/jquery/dist/jquery.min.js') ?>"></script>
        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo base_url('recursos/img/favicon.ico') ?>">

    </head>

    <body>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="ch-container">
                    <div class="row">
                        <noscript>
                        <div class="alert alert-block col-md-12">
                            <h4 class="alert-heading">Advertencia!</h4>
                            <p>Necesita tener javascript activado en su navegador para el correcto funcionamiento de este sitio.</p>
                        </div>
                        </noscript>
                        <div id="content">
                            <!-- content starts -->
                            <div class="row">

                                <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                    <!--/span-->
                                </div><!--/row-->

                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-md-offset-3 " style="margin-top: 50px;">                             
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-md-offset-4"  style="margin-top: 25px;">
                                        <form class="well" action="<?php echo base_url('changepass') ?>" method="post">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input type="text" class="form-control" readonly value="<?php echo $user ?>">
                                                </div>
                                            </div>
                                            <div class="form-group <?= form_error('pass') != '' ? 'has-error' : '' ?>">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input type="password" class="form-control" id="pass" name="pass"  placeholder="Contraseña anterior" value="<?= set_value('pass') ?>">
                                                </div>
                                                <?php if (form_error('pass') != ''): ?>
                                                    <span class="help-block"><?= form_error('pass') ?></span>
                                                <?php endif ?>
                                            </div>
                                            <div class="form-group <?= form_error('npass') != '' ? 'has-error' : '' ?>">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input type="password" class="form-control" id="npass" name="npass"  placeholder="Contraseña nueva" value="<?= set_value('npass') ?>">
                                                </div>
                                                <?php if (form_error('npass') != ''): ?>
                                                    <span class="help-block"><?= form_error('npass') ?></span>
                                                <?php endif ?>
                                            </div>
                                            <div class="form-group <?= form_error('npass1') != '' ? 'has-error' : '' ?>">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input type="password" class="form-control" id="npass1" name="npass1"  placeholder="Repetir contraseña nueva" value="<?= set_value('pass1') ?>">
                                                </div>
                                                <?php if (form_error('npass1') != ''): ?>
                                                    <span class="help-block"><?= form_error('npass1') ?></span>
                                                <?php endif ?>
                                            </div>
                                            <div class="form-group">
                                                <a class="btn btn-success" href="<?php echo base_url('login') ?>">Volver</a>
                                                <button type="submit" class="btn btn-primary pull-right" >Cambiar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--/span-->
                                </div><!--/row-->
                            </div>
                            <!-- content ends -->
                        </div><!--/#content.col-md-0-->
                    </div><!--/fluid-row-->
                </div>
            </div>
        </div>
         <!-- Bootstrap 3.3.7 -->      
        <script src="<?php echo base_url('recursos/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url('recursos/bower_components/raphael/raphael.min.js') ?>"></script>
        <script src="<?php echo base_url('recursos/bower_components/morris.js/morris.min.js') ?>"></script>

        <!-- Sparkline -->
        <script src="<?php echo base_url('recursos/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>


        <!-- jvectormap -->
        <script src="<?php echo base_url('recursos/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
        <script src="<?php echo base_url('recursos/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>


        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('recursos/bower_components/jquery-knob/dist/jquery.knob.min.js') ?>"></script>

        <!-- DataTables -->
       


        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('recursos/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>

        <!-- Noty -->
        <script src="<?php echo base_url('recursos/bower_components/noty/jquery.noty.js') ?>"></script>

        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url('recursos/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url('recursos/bower_components/fastclick/lib/fastclick.js') ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('recursos/dist/js/adminlte.min.js') ?>"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('recursos/dist/js/pages/dashboard.js') ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('recursos/dist/js/demo.js') ?>"></script>

        <!-- Alertify -->
        <script src="<?php echo base_url('recursos/bower_components/alertifyjs/alertify.js') ?>"></script>
        <script>
            $(document).ready(function(){
<?php if (form_error('pass') != ''): ?>
                $("#pass").select();
<?php endif ?>
<?php if (form_error('user') != ''): ?>
                $("#user").select();
<?php endif ?>
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

    </body>
</html>
