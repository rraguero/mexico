<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Carta extends MY_Model {

    private $table = "tb_carta";
    private $id_table = "idn";

    function __construct() {
        parent::__construct();

        if (!$this->exist_table()) {
            redirect(base_url('utiles'));
        }
    }

    public function listar() {
        $query = "SELECT tb_carta.idn,tb_carta.id, tb_carta.fecha,tb_carta.servicio, 
                    tb_cliente.nick, 
                    tb_origen.ciudad as origen,
                    tb_destino.ciudad as destino,
                    tb_tractor.id as tractor,
                    tb_operador.nombre, tb_operador.apellidos
    FROM `tb_carta` INNER JOIN tb_cliente on(tb_carta.fk_cliente = tb_cliente.id) 
			    INNER JOIN tb_origen on(tb_carta.fk_origen = tb_origen.id) 
                INNER JOIN tb_destino on(tb_carta.fk_destino = tb_destino.id) 
                INNER JOIN tb_tractor on(tb_carta.fk_tractor = tb_tractor.id) 
                INNER JOIN tb_operador on(tb_tractor.fk_operador = tb_operador.id)";
        $cartas = $this->db->query($query)->result();
        return $cartas;
    }
    public function listar_carta_full($idn) {
        $query = "SELECT tb_carta.idn,tb_carta.id, tb_carta.fecha,tb_carta.servicio, 
                    tb_cliente.nick, 
                    tb_origen.ciudad as origen,
                    tb_destino.ciudad as destino,
                    tb_tractor.id as tractor,
                    tb_operador.nombre, tb_operador.apellidos
    FROM `tb_carta` INNER JOIN tb_cliente on(tb_carta.fk_cliente = tb_cliente.id) 
			    INNER JOIN tb_origen on(tb_carta.fk_origen = tb_origen.id) 
                INNER JOIN tb_destino on(tb_carta.fk_destino = tb_destino.id) 
                INNER JOIN tb_tractor on(tb_carta.fk_tractor = tb_tractor.id) 
                INNER JOIN tb_operador on(tb_tractor.fk_operador = tb_operador.id) where `idn` = $idn";
        $carta = $this->db->query($query)->result();
        return $carta[0];
    }

    public function get_carta($id) {
        return $this->db->get_where($this->table, array('idn' => $id))->row();
    }

    public function get_carta_by_id($id) {
        return $this->db->get_where($this->table, array($this->table . '.' . $this->id_table => $id))->row();
    }

    public function insertar($data) {

        $this->db->insert($this->table, $data);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM `tb_carta` WHERE `tb_carta`.`idn` = $id";
        if (!$this->db->simple_query($sql))
            return false;
        return true;
    }

    public function actualizar($id_carta, $data) {
        $this->db->where('idn', $id_carta)->update($this->table, $data);
    }

    function exist_table() {
        $tables = $this->db->query('SHOW TABLES')->result();
        $bandera = false;
        $db = "Tables_in_" . '' . $this->db->database;
        foreach ($tables as $row) {

            if ($row->$db == $this->table) {
                $bandera = TRUE;
            }
        }
        return $bandera;
    }

    public function exist_carta($cod) {
        $this->db->select('*')
                ->from($this->table)
                ->where('id', $cod);
        return $this->db->count_all_results() > 0;
    }

}
