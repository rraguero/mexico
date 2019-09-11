<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_Remolque $Remolque
 */
class Remolque extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_Remolque', 'Remolque');
    }

    public function index() {
        $remolque['remolques'] = $this->Remolque->listar();
        $this->load->view('admin/remolque/listar/loader', $remolque);
    }

    public function adicionar() {
        if ($this->input->method() == 'get') {
            $this->load->view("admin/remolque/adicionar/loader");
        } else {
            if ($this->form_validation->run('remolque') == FALSE) {
                $this->load->view("admin/remolque/adicionar/loader");
            } else {
                $data = $this->input->post();
                $this->Remolque->insertar($data);
                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El remolque se adicionó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('remolque'));
            }
        }
    }

    public function eliminar($id) {
        $remolque = $this->Remolque->get_remolque($id);
        if (!$remolque) {
            show_404();
            exit;
        }
        if ($this->Remolque->eliminar($id)) {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El remolque se eliminó correctamente',
                'type' => 'success'
            ));
        } else {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El remolque no se pudo eliminar del sistema, puede que haya dependencias',
                'type' => 'error'
            ));
        }
        redirect(base_url('remolque'));
    }

    public function editar($id) {
        $remolque = $this->Remolque->get_remolque($id);

        if (!$remolque) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/remolque/editar/loader", array('remolque' => $remolque));
        } else {
            $data = $this->input->post();
            $this->Remolque->actualizar($remolque->id, $data);
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El remolque se editó correctamente',
                'type' => 'success'
            ));
            redirect(base_url('remolque'));
        }
    }

    public function detalles($id) {
        $remolque = $this->Remolque->get_remolque($id);
        if (!$remolque) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/remolque/detalles/loader", array('remolque' => $remolque));
        }
    }

    public function exist_remolque($cod) {

        if ($this->Remolque->exist_remolque($cod)) {
            $this->form_validation->set_message('exist_remolque', 'El número elegido ya pertenece a un remolque');
            return false;
        }
        return true;
    }

}
