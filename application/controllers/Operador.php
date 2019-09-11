<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_Operador $Operador
 */
class Operador extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_Operador', 'Operador');
    }

    public function index() {
        $operador['operador'] = $this->Operador->listar();
        $this->load->view('admin/operador/listar/loader', $operador);
    }

    public function adicionar() {
        if ($this->input->method() == 'get') {
            $this->load->view("admin/operador/adicionar/loader");
        } else {
            if ($this->form_validation->run('operador') == FALSE) {
                $this->load->view("admin/operador/adicionar/loader");
            } else {
                $data = $this->input->post();
                $this->Operador->insertar($data);
                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El operador se adicionó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('operador'));
            }
        }
    }

    public function eliminar($id) {
        $operador = $this->Operador->get_operador($id);
        if (!$operador) {
            show_404();
            exit;
        }
        if ($this->Operador->eliminar($id)) {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El operador se eliminó correctamente',
                'type' => 'success'
            ));
        } else {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El operador no se pudo eliminar del sistema, puede que haya dependencias',
                'type' => 'error'
            ));
        }
        redirect(base_url('operador'));
    }

    public function editar($id) {
        $operador = $this->Operador->get_operador($id);

        if (!$operador) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/operador/editar/loader", array('operador' => $operador));
        } else {
            if ($this->form_validation->run('operador') == FALSE) {
                $this->load->view("admin/operador/editar/loader", array('cliente' => $operador));
            } else {
                $data = $this->input->post();

                $this->Operador->actualizar($operador->id, $data);
                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El operador se editó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('operador'));
            }
        }
    }

    public function detalles($id) {
        $operador = $this->Operador->get_operador($id);
        if (!$operador) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/operador/detalles/loader", array('operador' => $operador));
        }
    }
}