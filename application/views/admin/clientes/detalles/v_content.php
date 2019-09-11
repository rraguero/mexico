<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Detalles del cliente
                </h3>
            </div>
            <div class="panel-body">
                <div class="panel-body">
                    <div class="col-md-3">
                        <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-danger no-focus">
                            <div class="flip">
                                <div class="side">
                                    Importaciones
                                </div>
                                <div class="side back">
                                    120 envios
                                </div>
                            </div>
                            <span class="icon"></span>
                        </button>
                    </div>

                    <div class="col-md-3">
                        <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-info no-focus">
                            <div class="flip">
                                <div class="side">
                                    Exportaciones
                                </div>
                                <div class="side back">
                                    320 envios
                                </div>
                            </div>
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-warning no-focus">
                            <div class="flip">
                                <div class="side">
                                    Envios total
                                </div>
                                <div class="side back">
                                    440 envios
                                </div>
                            </div>
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-primary no-focus">
                            <div class="flip">
                                <div class="side">
                                    Porciento
                                </div>
                                <div class="side back">
                                    35.32%
                                </div>
                            </div>
                            <span class="icon"></span>
                        </button>
                    </div>

                </div>
                <hr>
                <div class="box-header">
                    <h2>Datos generales</h2>
                </div>
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Nick:</dt>
                        <dd><?= $cliente->nick ?></dd>
                        <dt>Empresa:</dt>
                        <dd><?= $cliente->empresa ?></dd>
                        <dt>Dirección:</dt>
                        <dd><i class="fa fa-map-marker light-orange bigger-110"></i> <?= $cliente->direccion ?></dd>                                    
                    </dl>
                </div>
            </div>
            <hr>

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