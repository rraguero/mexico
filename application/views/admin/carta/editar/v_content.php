<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3>
                    Editar carta
                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="<?= base_url('carta/editar/' . $carta->idn) ?>" method="POST">
                    <div class="box-body">               
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha</label>
                            <div class="col-sm-10">
                                <input type="text" class="date form-control" name="id" value="<?= $carta->id ?>" disabled="">
                                <input type="hidden" name="id" value="<?= $carta->id ?>" >
                            </div>
                        </div>                   
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha</label>
                            <div class="col-sm-10">
                                <input type="text" class="date form-control" name="fecha" required placeholder="AAAA-MM-DD" value="<?= $carta->fecha ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Cliente (Nick)</label>
                            <div class="col-sm-10">
                                <select  class="select2-A form-control" name="fk_cliente">
                                    <?php foreach ($clientes as $value) { ?>
                                        <option value="<?= $value->id ?>" ><?= $value->nick ?></option>                                
                                        <?PHP
                                    }
                                    ?>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Origen</label>
                            <div class="col-sm-10">
                                <select  class="select2-A form-control" name="fk_origen">
                                    <?php foreach ($origen as $value) { ?>
                                        <option value="<?= $value->id ?>" ><?= $value->ciudad ?></option>                                
                                        <?PHP
                                    }
                                    ?>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Destino</label>
                            <div class="col-sm-10">
                                <select  class="select2-A form-control" name="fk_destino">
                                    <?php foreach ($destinos as $value) { ?>
                                        <option value="<?= $value->id ?>" ><?= $value->ciudad ?></option>                                
                                        <?PHP
                                    }
                                    ?>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Servicio</label>
                            <div class="col-sm-10">
                                <select  class="form-control"  name="servicio" >
                                    <option value="1">Importación</option>                                
                                    <option value="2">Exportación</option>                                
                                    <option value="3">Local</option>                                
                                </select>
                            </div>
                        </div>
                        <?= my_input('referencia', 'No. referencia', 'No. referencia', TRUE,$carta->referencia) ?>       

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">No. Tractor (Operador)</label>
                            <div class="col-sm-10">
                                <select  class="select2-A form-control"  name="fk_tractor" id="fk_tractor">
                                    <option value="0">Seleccione un tractor</option>                                
                                    <?php foreach ($tractores as $value) { ?>
                                        <option value="<?= $value->id ?>" ><?= $value->id . ' -- (' . $value->nombre . ' ' . $value->apellidos . ')' ?> </option>                                

                                        <?PHP
                                    }
                                    ?>  
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Operador</label>
                            <div class="col-sm-10">
                                <input type="text"  id="operador" class="form-control" value="(Operador)" disabled="">
                                <input type="hidden" id="operadorID" class="form-control" value="(Operador)" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">No. Remolque</label>
                            <div class="col-sm-10">
                                <select  class="select2-A form-control" name="fk_remolque">
                                    <?php foreach ($remolques as $value) { ?>
                                        <option value="<?= $value->id ?>" ><?= $value->no ?></option>                                
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
                        <a class="btn btn-success btn-gradient pull-right" href="<?= base_url("carta") ?>">Volver</a>
                    </div>
                    <!-- /.box-footer -->
                </form>   
            </div>
        </div>
    </div>  
</div>
<script>
    $('.date').bootstrapMaterialDatePicker({weekStart: 0, time: false});

    $("#fk_tractor").change(function () {
        var fk_operador = $("#fk_tractor option:selected").val()
        var cadena = $("#fk_tractor option:selected").text()
        var operador = cadena.split("--")



        $("#operador").val(operador[1])
        $("#operadorID").val(fk_operador)

    });
    $(".select2-A").select2({
        placeholder: "Seleccione una opción",
        allowClear: true
    });

</script>