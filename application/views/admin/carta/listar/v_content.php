<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"><h3>
                    Listado de cartas
                    <a href="<?= base_url('carta/adicionar') ?>" data-toggle="tooltip" data-original-title="Agregar operador" class="pull-right" style="font-size: 16px;"><i class="fa fa-plus"></i> Agregar</a>
                </h3>
            </div>
            <div class="panel-body">
                <div class="responsive-table">
                    <table id="tablesM" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>                               
                                <th>No</th>
                                <th>Fecha</th>
                                <th>Empresa (Nick)</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>(Tractor) - Operador</th>
                                <th>Servicio</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cartas as $i => $row): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= $row->id ?></td>
                                    <td><?= $row->fecha ?></td>
                                    <td><?= $row->nick ?></td>
                                    <td><?= $row->origen ?></td>                 
                                    <td><?= $row->destino ?></td> 
                                    <td><?= '(' . $row->tractor . ') - ' . $row->nombre . ' ' . $row->apellidos ?></td> 
                                    <td><?php
                                        if ($row->servicio == '1') {
                                            echo '<a class=" btn-sm  btn-mn btn-success" value="primary">Exportación</a>';
                                        } elseif ($row->servicio == '2') {
                                            echo '<a class=" btn-sm  btn-mn btn-primary" value="primary">Importación</a>';
                                        } else if ($row->servicio == '3') {
                                            echo '<a class=" btn-sm  btn-mn btn-info" value="primary">Local</a>';
                                        }
                                        ?></td>                                  
                                    <td class="text-center">
                                        <a class="" href="<?= base_url("carta/editar/" . $row->idn) ?>" data-toggle="tooltip" data-original-title="Editar" class="fa fa-hover">
                                            <button class=" btn-sm  btn-mn btn-primary" value="primary">
                                                <span class="fa fa-edit"></span>
                                            </button>
                                        </a>
                                        <a class="" href="javascript:void(0)" data-toggle="tooltip" data-original-title="Eliminar" class="fa fa-hover" onclick="javascript:eliminar_show('<?= $row->idn ?>')" >
                                            <button class=" btn-sm  btn-mn btn-danger" value="primary">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </a>
                                        <a class="" href="<?= base_url("carta/detalles/" . $row->idn) ?>" data-toggle="tooltip" data-original-title="Detalles" class="fa fa-hover" >
                                            <button class=" btn-sm  btn-mn btn-warning" value="primary">
                                                <span class="fa fa-search-plus"></span>
                                            </button>
                                        </a>
                                        <a class="" href="<?= base_url("carta/detalles/" . $row->id) ?>" data-toggle="tooltip" data-original-title="Detalles" class="fa fa-hover" >
                                            <button class=" btn-sm  btn-mn btn-success" value="primary">
                                                <span class="fa fa-file-pdf-o"></span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                            <?php endforeach ?>


                        </tbody>    

                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>

<div class="modal modal-danger  fade" id="eliminar" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Eliminar carta</h4>
            </div>
            <div class="modal-body">
                <p>Estas seguro que deseas eliminar esta carta?.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  pull-left btn-info" data-dismiss="modal">Cerrar</button>
                <button type="button"  onclick="javascript:eliminar()"class="btn btn-danger">Eliminar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tablesM').DataTable(
                {
                    "oLanguage": {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
                }
        );
    });
    var id;
    function eliminar_show(value) {
        id = value;
        $("#eliminar").modal('show');
    }
    function eliminar() {
        document.location = "<?= base_url('carta/eliminar') ?>" + "/" + id;
    }
</script>


