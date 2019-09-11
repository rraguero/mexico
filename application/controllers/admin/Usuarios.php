<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_Usuarios $Usuarios
 * @property M_Tematicas $Tematicas
 */
class usuarios extends MY_Controller {

    function __construct() {
        parent::__construct();
        if (!is_logged())
            redirect(base_url('login'));

        if (!is_admin())
            show_404();

        $this->load->model('M_Usuarios', 'Usuarios');
        $this->load->model('M_Log', 'Log');
    }

    public function index() {
        $data['usuarios'] = $this->Usuarios->listar();
        $this->Log->crear("Acceso al listado de usuarios del sistema");
        $this->load->view("admin/usuarios/listar/loader", $data);
    }

    public function auditoria() {
        $data['auditoria'] = $this->Log->listar();
        $this->Log->crear("Acceso a la auditoria del sistema");
        $this->load->view("admin/auditoria/loader", $data);
    }

    public function registro($id) {
        $evento = $this->Log->get_log($id);
        $this->Log->crear("Acceso a los detalles de la auditoria, evento (" . $evento->id . ")");
        $data['evento'] = $evento;
        $this->load->view("admin/auditoria/detalles/loader", $data);
    }

    public function detalles($id) {
        $usuarios = $this->Usuarios->get_user($id);
        $this->Log->crear("Acceso a los detalles del usuario (" . $usuarios->user . ")");
        if (!$usuarios) {
            show_404();
            exit;
        }
        $data['usuarios'] = $usuarios;
        $this->load->view("admin/usuarios/detalles/loader", $data);
    }

    public function adicionar() {
        if ($this->input->method() == 'get') {
            $this->load->view("admin/usuarios/adicionar/loader");
        } else {
            if ($this->form_validation->run('usuario') == FALSE) {
                $this->load->view("admin/usuarios/adicionar/loader");
            } else {
                $user = $this->input->post()['user'];
                $this->Log->crear("Inserto un nuevo usuario (" . $user . ")");
                $this->Usuarios->insertar($this->input->post());

                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El usuario se adiconó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('admin/usuarios'));
            }
        }
    }

    public function eliminar($id) {
        $usuario = $this->Usuarios->get_user($id);
        if (!$usuario) {
            show_404();
            exit;
        }
        if ($this->Usuarios->eliminar($id)) {
            $this->Log->crear("Se ha eliminado el usuario (" . $usuario->user . ")");
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El usuario se eliminó correctamente',
                'type' => 'success'
            ));
        } else {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El Usuario no se pudo eliminar del sistema',
                'type' => 'error'
            ));
        }
        redirect(base_url('admin/usuarios'));
    }

//    USUARIOS
    public $id_user;

    public function exist_usuario($user) {
        if ($this->Usuarios->exist_user($user, $this->id)) {
            $this->form_validation->set_message('exist_usuario', 'El usuario ya existe');
            return false;
        }
        return true;
    }

    public function crear_usuario($id_cliente) {
        $cliente = $this->Clientes->get_cliente($id_cliente);
        if (!$cliente) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/clientes/usuarios/adicionar/loader", array('cliente' => $cliente));
        } else {
            if ($this->form_validation->run('usuario') == FALSE) {
                $this->load->view("admin/clientes/usuarios/adicionar/loader", array('cliente' => $cliente));
            } else {
                $id_user = $this->Usuarios->insertar($this->input->post(), 'cliente');
                $this->Clientes->actualizar($cliente->id, array('fk_user' => $id_user));

                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El usuario del cliente se adiconó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('admin/clientes/'));
            }
        }
    }

    public function editar($id) {
        $user = $this->Usuarios->get_user($id);
        if (!$user) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/usuarios/editar/loader", array('usuario' => $user));
        } else {
            if ($this->form_validation->run('usuario_editar') == FALSE) {
                $this->load->view("admin/usuarios/editar/loader", array('usuario' => $user));
            } else {
                $this->Log->crear("Se ha editado el usuario (" . $user->user . ")");
                
                $this->Usuarios->actualizar($user->id, $this->input->post());
                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El usuario se editó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('admin/usuarios/'));
            }
        }
    }

    public function pass_usuario($id) {
        $user = $this->Usuarios->get_user_by_id($id);
        if (!$user) {
            show_404();
            exit;
        }
        $cliente = $this->Clientes->get_cliente_by_user($id);
        if ($this->input->method() == 'get') {
            $this->load->view("admin/clientes/usuarios/pass/loader", array('user' => $user, 'cliente' => $cliente));
        } else {
            if ($this->form_validation->run('usuario_pass') == FALSE) {
                $this->load->view("admin/clientes/usuarios/pass/loader", array('user' => $user, 'cliente' => $cliente));
            } else {
                $this->Usuarios->actualizar(
                        $user->id, array('pass' => md5($this->input->post('pass')))
                );
                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'Se cambió la contraseña correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('admin/clientes/'));
            }
        }
    }

    public function eliminar_usuario($id) {
        $user = $this->Usuarios->get_user_by_id($id);
        if (!$user) {
            show_404();
            exit;
        }
        if ($this->Usuarios->eliminar($id)) {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El usuario se eliminó correctamente',
                'type' => 'success'
            ));
        } else {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El usuario no se pudo eliminar porque posee registros en el sistema',
                'type' => 'error'
            ));
        }
        redirect(base_url('admin/clientes'));
    }

}
