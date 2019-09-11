<ul class="breadcrumb">
    <li>
        <a href="<?php echo base_url('admin/home')?>">Inicio</a>    </li>
    <li>
        <a href="<?php echo base_url('admin/usuarios/')?>">Usuario</a>
    </li>
    <li>
        <a href="<?php echo base_url('admin/usuarios/detalles/'.$usuario->id)?>"><?=$usuario->nombre?></a>
    </li>
</ul>