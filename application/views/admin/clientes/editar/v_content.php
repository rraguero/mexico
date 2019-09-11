<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Editar cliente

                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="<?= base_url('clientes/editar/' . $cliente->id) ?>" method="POST">
                    <div class="box-body">               
                        <?= my_input('nick', 'Nick', 'Nick', TRUE, $cliente->nick) ?>
                        <?= my_input('empresa', 'Empresa', 'Empresa', TRUE, $cliente->empresa) ?>                     
                        <?= my_input('direccion', 'Dirección', 'Dirección', TRUE, $cliente->direccion) ?>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">                
                        <button type="submit" class="btn btn-primary btn-gradient pull-right" style="margin-left: 5px;">Editar</button>
                        <a class="btn btn-success btn-gradient pull-right" href="<?= base_url("clientes") ?>">Volver</a>
                    </div>
                    <!-- /.box-footer -->
                </form>   
            </div>
        </div>
    </div>  
</div>