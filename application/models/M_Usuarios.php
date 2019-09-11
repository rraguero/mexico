<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Usuarios extends MY_Model {

    private $table = "tb_user";
    private $id_table = "id";

    function __construct() {
        parent::__construct();

        if (!$this->exist_table()) {
            redirect(base_url('utiles'));
        }
    }

    public function listar() {
        $usuarios = $this->db->get($this->table)->result();
        return $usuarios;
    }

    public function get_user($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row();
    }

    public function get_usuario($user) {
        $res = $this->db->get_where($this->table, array('user' => $user))->row();
        return $res;
    }

    public function get_user_by_id($id) {

        return $this->db->get_where($this->table, array($this->table . '.' . $this->id_table => $id))->row();
    }

    public function get_user_by_email($email) {
        return $this->db->get_where($this->table, array($this->table . '.email' => $email))->row();
    }

    public function insertar($data) {
        unset($data['pass1']);
        $data['pass'] = md5($data['pass']);

        $this->db->insert($this->table, $data);

        // $id = $this->db->insert_id();
        //codigo de validacion
//        $this->db->set('valid_email', urlencode(base64_encode(json_encode(array('id' => $id, 'code' => time())))));
//        $this->db->where('id', $id);
//        $this->db->update($this->table);

        return $id;
    }

    public function actualizar($id_user, $data) {
        array_pop($data);
        
        $this->db->where('id', $id_user)->update($this->table, $data);
    }

    public function eliminar($id) {
        if (!$this->db->simple_query('DELETE FROM ' . $this->table . ' WHERE ' . $this->id_table . '=' . $id))
            return false;
        return true;
    }
    public function exist_user($user, $id_user = null) {
        $this->db->select('*')
                ->from($this->table)
                ->where('user', $user);

        return $this->db->count_all_results() > 0;
    }

    public function exist_email($email, $id_user = null) {
        $this->db->select('*')
                ->from($this->table)
                ->where('email', $email);
        if (isset($id_user))
            $this->db->where($this->id_table . '<>', $id_user);
        return $this->db->count_all_results() > 0;
    }

    public function valid_pass($pass) {
        $id = $this->session->userdata('id_user');
        $pass = md5($pass);
        $this->db->select('*')
                ->from($this->table)
                ->where($this->id_table, $id)
                ->where('pass', $pass);
        return $this->db->count_all_results() > 0;
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
