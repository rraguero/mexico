<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Agregar Usuario</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="<?= base_url('admin/usuarios/adicionar') ?>" method="POST">
        <div class="box-body">               
            <?= my_input('nombre', 'Nombre', 'Nombre', TRUE) ?>
            <?= my_input('apellidos', 'Apellidos', 'Apellidos', TRUE) ?>
            <?= my_input('email', 'Correo', 'Correo', TRUE) ?>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Rol (*)</label>
                <div class="col-sm-10">
                    <select class="form-control " id="rol" name="rol" >
                        <option value="usuario" >Usuario</option>                        
                        <option value="administrador" >Administrador</option>
                    </select>
                </div>
            </div>         
            <?= my_input('user', 'Usuario', 'Usuario', TRUE) ?>
            <?= my_input('pass', 'Contraseña', 'Contraseña', TRUE, null, 'password') ?>
            <?= my_input('pass1', 'Repetir contraseña', 'Repetir  contraseña', TRUE, null, 'password') ?>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">                
            <button type="submit" class="btn btn-info pull-right">Agregar</button>
        </div>
        <!-- /.box-footer -->
    </form>        
</div>