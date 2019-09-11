<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Detalles del operador
                </h3>
            </div>
            <div class="panel-body">             
               
                <div class="box-header">
                    <h2>Datos generales</h2>
                </div>
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Nombre:</dt>
                        <dd><?= $operador->nombre ?></dd>
                        <dt>Apellidos:</dt>
                        <dd><?= $operador->apellidos ?></dd>
                        <dt>No Tractor:</dt>
                        <dd><i class="fa fa-truck"></i> #889976 </dd>
                    </dl>
                </div>
                  <a class="btn btn-success btn-gradient pull-right" href="<?= base_url("operador") ?>">Volver</a>
            </div>
           
            
        </div>
    </div>
</div>