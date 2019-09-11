<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Destino extends MY_Model {

    private $table = "tb_destino";
    private $id_table = "id";

    function __construct() {
        parent::__construct();

        if (!$this->exist_table()) {
            redirect(base_url('utiles'));
        }
    }

    public function listar() {
        $destinos = $this->db->get($this->table)->result();
        return $destinos;
    }

    public function get_destino($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row();
    }

    public function get_destino_by_id($id) {
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

    public function actualizar($id_destino, $data) {
        $this->db->where('id', $id_destino)->update($this->table, $data);
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