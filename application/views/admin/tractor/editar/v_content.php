<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Editar tractor
                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="<?= base_url('tractor/editar/' . $tractor->id) ?>" method="POST">
                    <div class="box-body">               
                          <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Operadores</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" disabled="true" value="<?= $tractor->id ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Operadores</label>
                            <div class="col-sm-10">
                                <select  class="select2-A form-control" name="fk_operador">
                                    <?php foreach ($operadores as $value) { ?>
                                        <option value="<?= $value->id ?>" ><?= $value->nombre . ' ' . $value->apellidos ?></option>                                
                                        <?PHP
                                    }
                                    ?>  
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">                
                        <button type="submit" class="btn btn-primary btn-gradient pull-right" style="margin-left: 5px;">Editar</button>
                        <a class="btn btn-success btn-gradient pull-right" href="<?= base_url("tractor") ?>">Volver</a>
                    </div>
                    <!-- /.box-footer -->
                </form>   

            </div>
        </div>
    </div>  
</div>