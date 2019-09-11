<?php

$config = array(
    'changepass/index' => array(
        array(
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'max_length[30]|callback_valid_pass|required'
        ),
        array(
            'field' => 'npass',
            'label' => 'Nueva contraseña',
            'rules' => 'max_length[30]|required'
        ),
        array(
            'field' => 'npass1',
            'label' => 'Repetir contraseña',
            'rules' => 'matches[npass]|required'
        )
    ),
    'usuario' => array(
        array(
            'field' => 'user',
            'label' => 'Usuario',
            'rules' => 'trim|user_chars|max_length[30]|required|callback_exist_usuario'
        ),
        array(
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'max_length[30]|required'
        ),
        array(
            'field' => 'pass1',
            'label' => 'Repetir contraseña',
            'rules' => 'matches[pass]|required'
        ),
        array(
            'field' => 'email',
            'label' => 'Correo',
            'rules' => 'trim|valid_email|required'
        ),
        array(
            'field' => 'nombre',
            'label' => 'Nombre',
            'rules' => 'trim|required|max_length[90]'
        ),
        array(
            'field' => 'apellidos',
            'label' => 'Apellidos',
            'rules' => 'trim|required|max_length[90]'
        ),
    ),
    'usuario_editar' => array(
        array(
            'field' => 'user',
            'label' => 'Usuario',
            'rules' => 'trim|user_chars|max_length[30]|required'
        ),
        array(
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'max_length[30]|required'
        ),
        array(
            'field' => 'pass1',
            'label' => 'Repetir contraseña',
            'rules' => 'matches[pass]|required'
        ),
        array(
            'field' => 'email',
            'label' => 'Correo',
            'rules' => 'trim|valid_email|required'
        ),
        array(
            'field' => 'nombre',
            'label' => 'Nombre',
            'rules' => 'trim|required|max_length[90]'
        ),
        array(
            'field' => 'apellidos',
            'label' => 'Apellidos',
            'rules' => 'trim|required|max_length[90]'
        ),
    ),
    'usuario_pass' => array(
        array(
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'max_length[30]'
        ),
        array(
            'field' => 'pass1',
            'label' => 'Repetir contraseña',
            'rules' => 'matches[pass]'
        ),
    ),
    'cliente' => array(
        array(
            'field' => 'nick',
            'label' => 'Nick',
            'rules' => 'max_length[20]|required'
        ),
        array(
            'field' => 'empresa',
            'label' => 'Empresa',
            'rules' => 'max_length[100]|required|alpha'
        ),
        array(
            'field' => 'direccion',
            'label' => 'Dirección',
            'rules' => 'max_length[100]|required'
        )
    ),
    'operador' => array(
        array(
            'field' => 'nombre',
            'label' => 'Nombre',
            'rules' => 'max_length[50]|required|alpha'
        ),
        array(
            'field' => 'apellidos',
            'label' => 'Apellidos',
            'rules' => 'max_length[100]|required|alpha'
        )
    ),
    'tractor' => array(
        array(
            'field' => 'id',
            'label' => 'No Tractor',
            'rules' => 'max_length[30]|required|callback_exist_tractor'
        )
    ),
    'remolque' => array(
        array(
            'field' => 'no',
            'label' => 'Número',
            'rules' => 'max_length[30]|required|callback_exist_remolque'
        )
    ),
    'carta' => array(
        array(
            'field' => 'id',
            'label' => 'Número',
            'rules' => 'max_length[11]|numeric|required|callback_exist_carta'
        ),
        array(
            'field' => 'referencia',
            'label' => 'No. referencia',
            'rules' => 'max_length[11]|numeric|required'
        ),
        array(
            'field' => 'fecha',
            'label' => 'Fecha',
            'rules' => 'required'
        )
    ),
    'carta_editar' => array(      
        array(
            'field' => 'referencia',
            'label' => 'No. referencia',
            'rules' => 'max_length[11]|numeric|required'
        ),
        array(
            'field' => 'fecha',
            'label' => 'Fecha',
            'rules' => 'required'
        )
    ),
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    'servicioAutorizado' => array(
        array(
            'field' => 'fecha',
            'label' => 'Fecha',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'origen',
            'label' => 'Origen',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'destino',
            'label' => 'Destino ',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'ruta_autorizada',
            'label' => 'Ruta autorizada',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'hora_salida',
            'label' => 'Hora salida',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'hora_entrada',
            'label' => 'Hora entrada',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'tiempo_horas',
            'label' => 'Tiempo horas',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'salida_km',
            'label' => 'Salida KM',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'llegada_km',
            'label' => 'Llegada KM',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'cant_pasajero',
            'label' => 'Cantidad de pasajeros',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'observaciones',
            'label' => 'Conductor uno',
            'rules' => 'trim|max_length[300]'
        )
    ),
    'carton' => array(
        array(
            'field' => 'empresa',
            'label' => 'Empresa',
            'rules' => 'trim|max_length[50]|required|alpha'
        ),
        array(
            'field' => 'exp_chofer',
            'label' => 'Expediente',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'nomb_apell_chofer',
            'label' => 'Nombre y Apellido',
            'rules' => 'trim|max_length[50]|required|alpha'
        ),
        array(
            'field' => 'no_ruta',
            'label' => 'Numero ruta',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'base_terminal',
            'label' => 'Base o terminal',
            'rules' => 'trim|max_length[50]|required|alpha'
        ),
        array(
            'field' => 'hr_com',
            'label' => 'Hora comienza',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'hr_term',
            'label' => 'Hora termina',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'servicio',
            'label' => 'Servicio',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'codigo',
            'label' => 'Omnibus',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'cant_salidas',
            'label' => 'Salidas',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'primer_turno',
            'label' => 'Primer turno',
            'rules' => 'trim|max_length[50]|alpha'
        ),
        array(
            'field' => 'segundo_turno',
            'label' => 'Segundo turno',
            'rules' => 'trim|max_length[50]|alpha'
        ),
        array(
            'field' => 'tercer_turno',
            'label' => 'Tercer turno',
            'rules' => 'trim|max_length[50]|alpha'
        ),
        array(
            'field' => 'transbordos',
            'label' => 'Tansbordos',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'basico',
            'label' => 'Basico',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'incremento',
            'label' => 'Incremento',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'turno_partido',
            'label' => 'Turno partido',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'confronta',
            'label' => 'Confronta',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'voluntario',
            'label' => 'Voluntario',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'total',
            'label' => 'Total',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'chofer',
            'label' => 'Chofer',
            'rules' => 'trim|max_length[50]|required|alpha'
        ),
    ),
    'cartonViajes' => array(
        array(
            'field' => 'viajes',
            'label' => 'Viajes',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'h_salida',
            'label' => 'Hora Salida',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'h_llegada',
            'label' => 'Hora Salida',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'trans_entrega',
            'label' => 'Transbordo entrega',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'trans_expedido',
            'label' => 'Transbordo expedido',
            'rules' => 'trim|max_length[50]'
        ),
        array(
            'field' => 'uso',
            'label' => 'Uso estadistico',
            'rules' => 'trim|max_length[50]'
        )
    ),
    'cartonInterrupciones' => array(
        array(
            'field' => 'no_viaje',
            'label' => 'No viajes',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'lugar',
            'label' => 'Lugar',
            'rules' => 'trim|max_length[50]|required|alpha'
        ),
        array(
            'field' => 'causa',
            'label' => 'Causa',
            'rules' => 'trim|max_length[50]|required|alpha'
        ),
        array(
            'field' => 'hr_rotura',
            'label' => 'Hora rotura',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'hr_grua',
            'label' => 'Llegada grua',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'continuo',
            'label' => 'Continnuo',
            'rules' => 'trim|max_length[50]|required|alpha'
        ),
        array(
            'field' => 'hr_bo_pc',
            'label' => 'Hora llegada PC',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'mecanico',
            'label' => 'Mecánico',
            'rules' => 'trim|max_length[50]|required|alpha'
        )
    ),
    'cartonObservaciones' => array(
        array(
            'field' => 'hr_salida',
            'label' => 'Hora salida BASE',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'hr_llegada_exp',
            'label' => 'Hora llegada EXP',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'hr_salida_exp',
            'label' => 'Hora salida EXP',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'hr_llegada',
            'label' => 'Hora llegada BASE',
            'rules' => 'trim|max_length[50]|required|callback_horaOk'
        ),
        array(
            'field' => 'observaciones',
            'label' => 'Observaciones',
            'rules' => 'trim|max_length[50]|alpha'
        ),
        array(
            'field' => 'dpto_inspeccion',
            'label' => 'Dpto inspeccion',
            'rules' => 'trim|max_length[50]'
        )
    ),
    'rutas' => array(
        array(
            'field' => 'numero_ruta',
            'label' => 'Numero ruta',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'destino',
            'label' => 'Destino',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'servicio',
            'label' => 'Servicio',
            'rules' => 'trim|max_length[50]|required'
        )
    ),
    'flete' => array(
        array(
            'field' => 'destino',
            'label' => 'Destino',
            'rules' => 'trim|max_length[50]|required|alpha'
        )
    ),
    'programacionP' => array(
        array(
            'field' => 'fecha',
            'label' => 'Fecha',
            'rules' => 'trim|max_length[50]|required|callback_exist_fecha_prog'
        )
    ),
    'recaudacion' => array(
        array(
            'field' => 'monto',
            'label' => 'Monto',
            'rules' => 'trim|max_length[50]|required'
        )
    ),
    'energetico' => array(
        array(
            'field' => 'codigo',
            'label' => 'No. Tarjeta',
            'rules' => 'trim|max_length[16]|required|numeric|callback_exist_codigo'
        ),
        array(
            'field' => 'combustible',
            'label' => 'Combustible',
            'rules' => 'trim|max_length[50]|required|numeric'
        ),
        array(
            'field' => 'chofer',
            'label' => 'Chofer',
            'rules' => 'trim|max_length[250]|required|alpha'
        )
    ),
    'energetico_editar' => array(
        array(
            'field' => 'codigo',
            'label' => 'Código',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'combustible',
            'label' => 'Combustible',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'chofer',
            'label' => 'Chofer',
            'rules' => 'trim|max_length[250]|required'
        )
    ),
    'modelo' => array(
        array(
            'field' => 'ueb',
            'label' => 'UEB',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'base',
            'label' => 'Base',
            'rules' => 'trim|max_length[50]|required'
        ),
        array(
            'field' => 'revisado',
            'label' => 'Revisado por',
            'rules' => 'trim|max_length[250]|required'
        ),
        array(
            'field' => 'confesionado',
            'label' => 'Confesionado por',
            'rules' => 'trim|max_length[250]|required'
        ),
        array(
            'field' => 'aprobado',
            'label' => 'Aprobado por',
            'rules' => 'trim|max_length[250]|required'
        )
    )
);
