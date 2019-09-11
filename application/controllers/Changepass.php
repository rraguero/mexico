<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_Usuarios $User
 */
class ChangePass extends MY_Controller {

    function __construct() {
        parent::__construct();
        if(!is_logged())
            redirect(base_url('login'));

        $this->load->model('M_Usuarios', 'User');
    }

    public function valid_pass($text){
        if($this->User->valid_pass($text)==false){
            $this->form_validation->set_message('valid_pass', 'La contraseña es incorrecta');
            return false;
        }
        return true;
    }

    public function index()
    {
        $data['user'] = $this->session->userdata('user');
        if($this->input->method()=='get'){
            $this->load->view('v_change_pass', $data);
        }else{
            if($this->form_validation->run()==FALSE){
                $this->load->view('v_change_pass', $data);
            }else{
                $this->User->actualizar(
                    $this->session->userdata('id_user'),
                    array('pass'=>md5($this->input->post('npass')))
                );
                $this->session->set_flashdata(array(
                    'ok'=>true,
                    'msg'=>'La contraseña se cambió con éxito',
                    'type'=>'success'
                ));
                redirect(base_url('changepass'));
            }
        }
    }
}
