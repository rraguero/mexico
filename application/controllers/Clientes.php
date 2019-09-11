<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_Clientes $Clientes
 */
class Clientes extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_Clientes', 'Clientes');
    }

    public function index() {
        $clientes['clientes'] = $this->Clientes->listar();
        $this->load->view('admin/clientes/listar/loader', $clientes);
    }

    public function adicionar() {
        if ($this->input->method() == 'get') {
            $this->load->view("admin/clientes/adicionar/loader");
        } else {
            if ($this->form_validation->run('cliente') == FALSE) {
                $this->load->view("admin/clientes/adicionar/loader");
            } else {
                $data = $this->input->post();
                $this->Clientes->insertar($data);
                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El cliente se adicionó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('clientes'));
            }
        }
    }

    public function eliminar($id) {
        $cliente = $this->Clientes->get_cliente($id);
        if (!$cliente) {
            show_404();
            exit;
        }
        if ($this->Clientes->eliminar($id)) {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El cliente se eliminó correctamente',
                'type' => 'success'
            ));
        } else {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El cliente no se pudo eliminar del sistema, puede que haya dependencias',
                'type' => 'error'
            ));
        }
        redirect(base_url('clientes'));
    }

    public function editar($id) {
        $cliente = $this->Clientes->get_cliente($id);

        if (!$cliente) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/clientes/editar/loader", array('cliente' => $cliente));
        } else {
            if ($this->form_validation->run('cliente') == FALSE) {
                $this->load->view("admin/clientes/editar/loader", array('cliente' => $cliente));
            } else {
                $data = $this->input->post();

                $this->Clientes->actualizar($cliente->id, $this->input->post());
                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El cliente se editó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('clientes'));
            }
        }
    }

    public function detalles($id) {
        $cliente = $this->Clientes->get_cliente($id);

        if (!$cliente) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/clientes/detalles/loader", array('cliente' => $cliente));
        }
    }

}
