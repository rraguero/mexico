<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Detalles del Tractor
                </h3>
            </div>
            <div class="panel-body">
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Identificador del tractor:</dt>
                        <dd><?= $tractor->id ?></dd>
                        <dt>Operador:</dt>
                        <dd><?= $tractor->nombre.' '.$tractor->apellidos ?></dd>                        
                    </dl>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading"><h3>Ultimas <span class="label label-primary">5</span> transacciones</h3></div>
                <div class="panel-body">                 
                    <div class="col-md-12 list-timeline">
                        <div class="col-md-12 list-timeline-section bg-light">
                            <div class="col-md-12 list-timeline-detail">
                                <h4>
                                    <span class="fa fa-truck list-timeline-icon"></span>
                                    Fecha del envio
                                    <small>12 de Agosto - 11.34 AM</small>
                                    <span class="label label-info">Exportación</span>
                                </h4>

                                <p>
                                    Aqui va el o los detalles del envio realizado. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 list-timeline">
                        <div class="col-md-12 list-timeline-section bg-light">
                            <div class="col-md-12 list-timeline-detail">
                                <h4>
                                    <img src="<?= base_url("/asset/img/truck.png")?>">
                                    Fecha del envio
                                    <small>16 de Julio - 9:56 AM</small>
                                    <span class="label label-danger">Importación</span>
                                </h4>
                                <p>
                                    Aqui va el o los detalles del envio realizado. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 list-timeline">
                        <div class="col-md-12 list-timeline-section bg-light">
                            <div class="col-md-12 list-timeline-detail">
                                <h4>
                                    <img src="<?= base_url("/asset/img/truck.png")?>">
                                    Fecha del envio
                                    <small>16 de Julio - 9:56 AM</small>
                                    <span class="label label-danger">Importación</span>
                                </h4>
                                <p>
                                    Aqui va el o los detalles del envio realizado. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 list-timeline">
                        <div class="col-md-12 list-timeline-section bg-light">
                            <div class="col-md-12 list-timeline-detail">
                                <h4>
                                    <img src="<?= base_url("/asset/img/truck.png")?>">
                                    Fecha del envio
                                    <small>19 de Julio - 15:56 AM</small>
                                    <span class="label label-danger">Importación</span>
                                </h4>
                                <p>
                                    Aqui va el o los detalles del envio realizado. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 list-timeline">
                        <div class="col-md-12 list-timeline-section bg-light">
                            <div class="col-md-12 list-timeline-detail">
                                <h4>
                                    <span class="fa fa-truck list-timeline-icon"></span>
                                    Fecha del envio
                                    <small>12 de Agosto - 11.34 AM</small>
                                    <span class="label label-info">Exportación</span>
                                </h4>

                                <p>
                                    Aqui va el o los detalles del envio realizado. 
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>