<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_Tractor $Tractor
 */
class Tractor extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_Tractor', 'Tractor');
        $this->load->model('M_Operador', 'Operador');
    }

    public function index() {
        $tractores['tractores'] = $this->Tractor->listar();
        $this->load->view('admin/tractor/listar/loader', $tractores);
    }

    public function adicionar() {
        $operadores = $this->Operador->listar_operadores_disponibles();
        if ($this->input->method() == 'get') {
            $this->load->view("admin/tractor/adicionar/loader", array('operadores' => $operadores));
        } else {
            if ($this->form_validation->run('tractor') == FALSE) {
                $this->load->view("admin/tractor/adicionar/loader", array('operadores' => $operadores));
            } else {
                $data = $this->input->post();
                $id_operador = $data['fk_operador'];
                $this->Operador->asignar_tractor_operador($id_operador, '1');
                $this->Tractor->insertar($data);
                $this->session->set_flashdata(array(
                    'ok' => true,
                    'msg' => 'El tractor se adicionó correctamente',
                    'type' => 'success'
                ));
                redirect(base_url('tractor'));
            }
        }
    }

    public function eliminar($id) {
        $tractor = $this->Tractor->get_tractor($id);
        if (!$tractor) {
            show_404();
            exit;
        }
        $id_operador = $tractor->fk_operador;
        $this->Operador->asignar_tractor_operador($id_operador, '0');$tractor->fk_operador;
       
        if ($this->Tractor->eliminar($id)) {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El tractor se eliminó correctamente',
                'type' => 'success'
            ));
        } else {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El tractor no se pudo eliminar del sistema, puede que haya dependencias',
                'type' => 'error'
            ));
        }
        redirect(base_url('tractor'));
    }

    public function editar($id) {
        $tractor = $this->Tractor->get_tractor($id);
        $fk_operador_old=$tractor->fk_operador;
        $operadores = $this->Operador->listar_operadores_disponibles();

        if (!$tractor) {
            show_404();
            exit;
        }
       // print_r($operadores);die;
        if (count($operadores) == 0) {
            $this->Operador->asignar_tractor_operador($tractor->fk_operador, '0');
            $operadores['operadores'] = $this->Operador->get_operador($tractor->fk_operador);
        }

        if ($this->input->method() == 'get') {
            $this->load->view("admin/tractor/editar/loader", array('tractor' => $tractor, 'operadores' => $operadores));
        } else {
            $this->load->view("admin/tractor/editar/loader", array('tractor' => $tractor, 'operadores' => $operadores));
            $data = $this->input->post();
            $id_operador = $data['fk_operador'];
            $this->Operador->asignar_tractor_operador($id_operador, '1');
            if($fk_operador_old != $id_operador)
            $this->Operador->asignar_tractor_operador($fk_operador_old, '0');
            
            $this->Tractor->actualizar($tractor->id, $data);
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El tractor se editó correctamente',
                'type' => 'success'
            ));
            redirect(base_url('tractor'));
        }
    }

    public function detalles($id) {
        $tractor = $this->Tractor->get_tractor_operador($id);
       
        if (!$tractor) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/tractor/detalles/loader", array('tractor' => $tractor));
        }
    }

    public function exist_tractor($cod) {

        if ($this->Tractor->exist_tractor($cod)) {
            $this->form_validation->set_message('exist_tractor', 'El número elegido ya pertenece a un tractor');
            return false;
        }
        return true;
    }
}