<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SISTEMA INTEGRAL DE GESTIÓN
            PATRIMONIAL</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="<?php echo base_url('recursos/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">  
        <!-- Font Awesome -->
        <link  href="<?php echo base_url('recursos/bower_components/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"> 
        <!-- Ionicons -->
        <link  href="<?php echo base_url('recursos/bower_components/Ionicons/css/ionicons.min.css') ?>" rel="stylesheet">  
        <!-- Theme style -->
        <link  href="<?php echo base_url('recursos/dist/css/AdminLTE.min.css') ?>" rel="stylesheet">  
        <!-- iCheck -->
        <link  href="<?php echo base_url('recursos/plugins/iCheck/square/blue.css') ?>" rel="stylesheet">
    </head>
    <style type="text/css">
        body {font-size:1.3em;}
        .fondoTransparente
        {
            /*Div que ocupa toda la pantalla*/
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            background-color:#ccc;
            /*IE*/
            filter: alpha(opacity=50);
            /*FireFox Opera*/
            opacity: .5;
        }
        .center
        {
            position: absolute;
            /*nos posicionamos en el centro del navegador*/
            top:180%;
            left:50%;
            /*determinamos una anchura*/
            width:400px;
            /*indicamos que el margen izquierdo, es la mitad de la anchura*/
            margin-left:-200px;
            /*determinamos una altura*/
            height:300px;
            /*indicamos que el margen superior, es la mitad de la altura*/
            margin-top:-150;

            padding:5px;
        }
    </style>
    <div class='fondoTransparente'>
    </div>

    <body style="background-image: url('<?= base_url("recursos/img/wallpaper(1).jpg") ?>');background-repeat: no-repeat;background-size: cover;" class="hold-transition login-page">
        <!--    <div class="row">-->
        <div class="col-xs-10 col-xs-offset-1">
            <div class="ch-container">
                <div class="row">
                    <noscript>
                    <div class="alert alert-block col-md-12">
                        <h4 class="alert-heading">Advertencia!</h4>
                        <p>Necesita tener javascript activado en su navegador para el correcto funcionamiento de este sitio.</p>
                    </div>
                    </noscript>

                    <div id="content" >
                        <!-- content starts -->
                        <div class="row">

                            <div class="row">
                                <div class="col-md-12">

                                </div>
                                <!--/span-->
                            </div><!--/row-->

                            <div class="row" style="margin-top: 50px;">
                                <div class="col-xs-12 col-md-6 col-md-offset-3">

                                </div>
                                <div  class="col-xs-12 col-md-4 col-md-offset-4 center" style="margin-top: 25px;">
                                    <form class="well" action="<?= base_url('login/login') ?>" method="post">
                                        <div class="form-group <?php if (isset($user_error)) echo 'has-error' ?>">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" value="<?= set_value('user') ?>">
                                            </div>
                                            <?php if (isset($user_error)): ?>
                                                <span class="help-block"><?php echo $user_error ?></span>
                                            <?php endif ?>
                                        </div>
                                        <div class="form-group <?php if (isset($pass_error)) echo 'has-error' ?>">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input type="password" class="form-control" id="pass" name="pass"  placeholder="Contraseña" value="<?= set_value('pass') ?>">
                                            </div>
                                            <?php if (isset($pass_error)): ?>
                                                <span class="help-block"><?php echo $pass_error ?></span>
                                            <?php endif ?>
                                        </div>
                                        <div class="form-group text-center">
                                            <a href="#">He olvidado la contraseña</a>
                                        </div>
                                        <div class="form-group-lg ">
                                            <button type="submit" class="btn btn-primary" style="width: 100%">Entrar</button>
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
        <!--    </div>-->
    </body>
</html>
