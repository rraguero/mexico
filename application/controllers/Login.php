<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_Usuarios $User
 */
class Login extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_Usuarios', 'User');
    }
    public function index() {
        
      
        redireccionar();
        $this->load->view('v_login');
    }
    public function login() {
         
        redireccionar();
        $user = $this->input->post("user");
        $pass = $this->input->post("pass");
        
        if (!isset($user) && !isset($pass))
            $this->load->view('v_login ');
        else {
            if ($user == "") {
                $data["user_error"] = "El usuario no puede ser vacío";
                $this->load->view('v_login', $data);
            } else {
                     $user_data = $this->User->get_usuario($user);                   
                    if ($user_data == null) {
                        $data["user_error"] = "El usuario no existe";
                        $this->load->view('v_login', $data);
                    } else if (strcmp(md5($pass), $user_data->pass) != 0) {
                        $data["pass_error"] = "La contraseña es incorrecta";
                        $this->load->view('v_login', $data);
                    } else {
                        //user correct
                        $this->session->set_userdata(array(
                            'id_user' => $user_data->id,
                            'user' => $user_data->user,
                            'rol' => $user_data->rol,
                            'KPa9384jh2015' => true
                        ));

                        $this->session->set_flashdata(array(
                            'ok' => true,
                            'msg' => 'Bienvenido al sistema!',
                            'type' => 'success')
                        );
                        redireccionar();
                    }
               
            }
        }
    }

    public function out() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
