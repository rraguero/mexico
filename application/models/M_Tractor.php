<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tractor extends MY_Model {

    private $table = "tb_tractor";
    private $id_table = "id";

    function __construct() {
        parent::__construct();

        if (!$this->exist_table()) {
            redirect(base_url('utiles'));
        }
    }

    public function listar() {
        $tractor = $this->db->query("SELECT tb_tractor.id,tb_tractor.fk_operador, tb_operador.nombre, tb_operador.apellidos FROM `tb_tractor` INNER JOIN tb_operador on(tb_tractor.fk_operador = tb_operador.id)")->result();
        return $tractor;
    }

    public function get_tractor_operador($id) {
        $tractor = $this->db->query("SELECT tb_tractor.id, tb_operador.nombre, tb_operador.apellidos FROM `tb_tractor` INNER JOIN tb_operador on(tb_tractor.fk_operador = tb_operador.id) WHERE tb_tractor.id = $id
")->result();
        return $tractor[0];
    }

    public function get_tractor($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row();
    }

    public function get_tractor_by_id($id) {
        return $this->db->get_where($this->table, array($this->table . '.' . $this->id_table => $id))->row();
    }

    public function insertar($data) {
        $this->db->insert($this->table, $data);
    }

    public function eliminar($id) {
        if (!$this->db->simple_query('DELETE FROM ' . $this->table . ' WHERE ' . $this->id_table . '=' . $id))
            return false;
        return true;
    }

    public function actualizar($id_cliente, $data) {
        $this->db->where('id', $id_cliente)->update($this->table, $data);
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

    public function exist_tractor($cod) {
        $this->db->select('*')
                ->from($this->table)
                ->where('id', $cod);
        return $this->db->count_all_results() > 0;
    }

}