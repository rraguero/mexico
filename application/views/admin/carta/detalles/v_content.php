<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Detalles de la carta Porte
                </h3>
            </div>
            <div class="panel-body">
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Número de carta porte:</dt>
                        <dd><?= $carta->id ?></dd>

                        <dt>Fecha de creada:</dt>
                        <dd><?= $carta->fecha ?></dd>
<br>
                        <dt>Servicio:</dt>
                        <dd><?php
                            if ($carta->servicio == '1') {
                                echo '<a class=" btn-sm  btn-mn btn-success" value="primary">Exportación</a>';
                            } elseif ($row->servicio == '2') {
                                echo '<a class=" btn-sm  btn-mn btn-primary" value="primary">Importación</a>';
                            } else if ($row->servicio == '3') {
                                echo '<a class=" btn-sm  btn-mn btn-info" value="primary">Local</a>';
                            }
                            ?></dd>

                        <dt>Nick del cliente:</dt>
                        <dd><?= $carta->nick ?></dd>
  <br>
                        <dt>Origen:</dt>
                        <dd><?= $carta->origen?></dd>
                      
                        <dt>Destino:</dt>
                        <dd><?= $carta->destino?></dd>
                        <br>
                        <dt>Número del tractor:</dt>
                        <dd><?= $carta->tractor?></dd>

                        <dt>Operador del tractor:</dt>
                        <dd><?= $carta->nombre .' '.$carta->apellidos ?></dd>

                    </dl>
                </div>
                  <a class="btn btn-success btn-gradient pull-right" href="<?= base_url("carta") ?>">Volver</a>
            </div>
           

        </div>
    </div>
</div>