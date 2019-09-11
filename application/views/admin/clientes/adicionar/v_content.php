<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Agregar cliente

                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="<?= base_url('clientes/adicionar') ?>" method="POST">
                    <div class="box-body">               
                        <?= my_input('nick', 'Nick', 'Nick', TRUE) ?>
                        <?= my_input('empresa', 'Empresa', 'Empresa', TRUE) ?>                     
                        <?= my_input('direccion', 'Dirección', 'Dirección', TRUE) ?>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">                
                        <button type="submit" class="btn btn-primary btn-gradient pull-right" style="margin-left: 5px;">Agregar</button>
                        <a class="btn btn-success btn-gradient pull-right" href="<?= base_url("clientes")?>">Volver</a>
                    </div>
                    <!-- /.box-footer -->
                </form>   
            </div>
        </div>
    </div>  
</div>

