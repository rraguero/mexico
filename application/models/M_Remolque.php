<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Remolque extends MY_Model {

    private $table = "tb_remolque";
    private $id_table = "id";

    function __construct() {
        parent::__construct();

        if (!$this->exist_table()) {
            redirect(base_url('utiles'));
        }
    }

    public function listar() {
        $remolques = $this->db->get($this->table)->result();
        return $remolques;
    }

    public function get_remolque($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row();
    }

    public function get_remolque_by_id($id) {
        return $this->db->get_where($this->table, array($this->table . '.' . $this->id_table => $id))->row();
    }

    public function insertar($data) {
     
        $this->db->insert($this->table, $data);
    }

    public function eliminar($id) {
       $sql = "DELETE FROM `tb_remolque` WHERE `tb_remolque`.`id` = $id";
        if (!$this->db->simple_query($sql))
            return false;
        return true;
    }

    public function actualizar($id_remolque, $data) {
        $this->db->where('id', $id_remolque)->update($this->table, $data);
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
      public function exist_remolque($cod) {
        $this->db->select('*')
                ->from($this->table)
                ->where('no', $cod);
        return $this->db->count_all_results() > 0;
    }
}