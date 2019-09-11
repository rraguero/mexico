<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Operador extends MY_Model {

    private $table = "tb_operador";
    private $id_table = "id";

    function __construct() {
        parent::__construct();

        if (!$this->exist_table()) {
            redirect(base_url('utiles'));
        }
    }

    public function listar() {
        $operador = $this->db->get($this->table)->result();
        return $operador;
    }

    public function listar_operadores_disponibles() {
        $operador = $this->db->query("SELECT * FROM `tb_operador` WHERE `disponibilidad` = 0")->result();
        return $operador;
    }

    public function asignar_tractor_operador($id_operador,$value) {
        $this->db->simple_query("UPDATE `tb_operador` SET `disponibilidad` = '$value' WHERE `tb_operador`.`id` =" . $id_operador);       
    }

    public function get_operador($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row();
    }

    public function get_operador_by_id($id) {
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

}
