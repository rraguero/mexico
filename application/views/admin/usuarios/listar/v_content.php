<div class="box">
    <div class="box-header">
        <h3 class="box-title">Listado de Usuarios</h3>
        <h5 class="pull-right"><a href="<?= base_url('admin/usuarios/adicionar') ?>"><i class="fa fa-plus"></i> Adicionar</a></h5>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>                
                    <th>Apellidos</th>   
                    <th>Correo</th>
                    <th>Usuario</th>                       
                    <th>Grupo</th>
                    <th width="15%">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $i => $row): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $row->nombre ?></td>
                        <td><?= $row->apellidos ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->user ?></td>                 
                        <td><?= $row->rol ?></td> 
                        <td class="text-center">
                            <a class="btn btn-success btn-sm" href="<?= base_url('admin/usuarios/detalles/' . $row->id) ?>" title="Detalles">
                                <i class="fa fa-search icon-white"></i>
                            </a>
                            <a class="btn btn-info btn-sm" href="<?= base_url('admin/usuarios/editar/' . $row->id) ?>" title="Editar">
                                <i class="glyphicon glyphicon-edit icon-white"></i>
                            </a>
                            <?php if ($row->rol != 'administrador') { ?>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="javascript:eliminar_show(<?= $row->id ?>)" title="Eliminar">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                </a>
                                <?php
                            }
                            ?>

                        </td>
                    </tr>
                    
                <?php endforeach ?>
                   
            
            </tbody>                
        </table>
    </div>
    <!-- /.box-body -->
</div>

<!--DELETE-->

<div class="modal modal-danger fade" id="eliminar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Eliminar usuario</h4>
            </div>
            <div class="modal-body">
                <p>Estas seguro que deseas eliminar este usuario?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button"  onclick="javascript:eliminar()"class="btn btn-outline">Eliminar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script>
    $(document).ready(function () {
        $("#table1").DataTable({

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
            },
       
        });
    });

    var id;

    function eliminar_show(value) {
        id = value;
        $("#eliminar").modal('show');
    }

    function eliminar() {
        document.location = "<?= base_url('admin/usuarios/eliminar') ?>" + "/" + id;
    }
</script>

