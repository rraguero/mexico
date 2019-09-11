<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Agregar tractor
                </h3>
            </div>
            <div class="panel-body">
                <?php if (count($operadores) == 0) { ?>
                    <div class="col-md-12">
                        <div class="alert alert-info col-md-12 col-sm-12  alert-icon alert-dismissible fade in" role="alert">
                            <div class="col-md-2 col-sm-2 icon-wrapper text-center">
                                <span class="fa fa-info fa-2x"></span></div>
                            <div class="col-md-10 col-sm-10">
                                <p><strong>Información!</strong> Todos los operadores contienen un TRACTOR asociado. Por favor inserte otro OPERADOR o puede editar algun TRACTOR insertado en el sistema.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">                

                        <a class="btn btn-success btn-gradient pull-right" href="<?= base_url("tractor") ?>">Volver</a>
                    </div>
                <?php } else {
                    ?>
                    <form class="form-horizontal" action="<?= base_url('tractor/adicionar') ?>" method="POST">
                        <div class="box-body">               
                            <?= my_input('id', 'No Tractor', 'No Tractor', TRUE) ?>
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
                            <button type="submit" class="btn btn-primary btn-gradient pull-right" style="margin-left: 5px;">Agregar</button>
                            <a class="btn btn-success btn-gradient pull-right" href="<?= base_url("tractor") ?>">Volver</a>
                        </div>
                        <!-- /.box-footer -->
                    </form>  
                    <?php
                }
                ?>
            </div>
        </div>
    </div>  
</div>

<script>
    $(".select2-A").select2({
        allowClear: true
    });
</script>

