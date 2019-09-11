 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    protected function call( $procedure )
    {
        $query =  $this->db->query($procedure);
        $res = $query->result();
        $query->next_result();
        $query->free_result();
        return $res;
    }
}
