<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_Carta $Carta
 */
class Carta extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_Carta', 'Carta');
        $this->load->model('M_Clientes', 'Cliente');
        $this->load->model('M_Destino', 'Destino');
        $this->load->model('M_Origen', 'Origen');
        $this->load->model('M_Tractor', 'Tractor');
        $this->load->model('M_Remolque', 'Remolque');
    }

    public function index() {
        $carta['cartas'] = $this->Carta->listar();
        $this->load->view('admin/carta/listar/loader', $carta);
    }

    public function adicionar() {
        $clientes = $this->Cliente->listar();
        $destinos = $this->Destino->listar();
        $origen = $this->Origen->listar();
        $tractores = $this->Tractor->listar();
        $remolques = $this->Remolque->listar();
        if ($this->input->method() == 'get') {


            $this->load->view("admin/carta/adicionar/loader", array("clientes" => $clientes,
                "destinos" => $destinos,
                "origen" => $origen, "tractores" => $tractores, "remolques" => $remolques));
        } else {

            if ($this->form_validation->run('carta') == FALSE) {
                $this->load->view("admin/carta/adicionar/loader", array("clientes" => $clientes,
                    "destinos" => $destinos,
                    "origen" => $origen, "tractores" => $tractores, "remolques" => $remolques));
            } else {
                $data = $this->input->post();
                if ($data['fk_tractor'] == '0') {
                    $this->session->set_flashdata(array(
                        'ok' => true,
                        'msg' => 'Debe seleccionar al menos un tractor',
                        'type' => 'error'
                    ));
                    $this->load->view("admin/carta/adicionar/loader", array("clientes" => $clientes,
                        "destinos" => $destinos,
                        "origen" => $origen, "tractores" => $tractores, "remolques" => $remolques));
                } else {
                    $this->Carta->insertar($data);
                    $this->session->set_flashdata(array(
                        'ok' => true,
                        'msg' => 'El carta se adicionó correctamente',
                        'type' => 'success'
                    ));
                    redirect(base_url('carta'));
                }
            }
        }
    }

    public function eliminar($id) {
        $carta = $this->Carta->get_carta($id);
        if (!$carta) {
            show_404();
            exit;
        }
        if ($this->Carta->eliminar($id)) {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El carta se eliminó correctamente',
                'type' => 'success'
            ));
        } else {
            $this->session->set_flashdata(array(
                'ok' => true,
                'msg' => 'El carta no se pudo eliminar del sistema, puede que haya dependencias',
                'type' => 'error'
            ));
        }
        redirect(base_url('carta'));
    }

    public function editar($id) {
        $carta = $this->Carta->get_carta($id);
        $clientes = $this->Cliente->listar();
        $destinos = $this->Destino->listar();
        $origen = $this->Origen->listar();
        $tractores = $this->Tractor->listar();
        $remolques = $this->Remolque->listar();
        if (!$carta) {
            show_404();
            exit;
        }
        if ($this->input->method() == 'get') {
            $this->load->view("admin/carta/editar/loader", array('carta' => $carta, "clientes" => $clientes,
                "destinos" => $destinos,
                "origen" => $origen, "tractores" => $tractores, "remolques" => $remolques));
        } else {

            if ($this->form_validation->run('carta_editar') == FALSE) {
                $this->load->view("admin/carta/editar/loader", array("clientes" => $clientes,
                    "destinos" => $destinos,
                    "origen" => $origen, "tractores" => $tractores, "remolques" => $remolques));
            } else {
                $data = $this->input->post();
                if ($data['fk_tractor'] == '0') {
                    $this->session->set_flashdata(array(
                        'ok' => true,
                        'msg' => 'Debe seleccionar al menos un tractor',
                        'type' => 'error'
                    ));
                    $this->load->view("admin/carta/editar/loader", array('carta' => $carta, "clientes" => $clientes,
                        "destinos" => $destinos,
                        "origen" => $origen, "tractores" => $tractores, "remolques" => $remolques));
                } else {
                    $this->Carta->actualizar($carta->idn, $data);
                    $this->session->set_flashdata(array(
                        'ok' => true,
                        'msg' => 'El carta se editó correctamente',
                        'type' => 'success'
                    ));
                    redirect(base_url('carta'));
                }
            }
        }
    }

    public function detalles($id) {
        $carta = $this->Carta->listar_carta_full($id);
        if (!$carta) {
            show_404();
            exit;
        }


        if ($this->input->method() == 'get') {
            $this->load->view("admin/carta/detalles/loader", array('carta' => $carta));
        }
    }

    public function exist_carta($cod) {
        if ($this->Carta->exist_carta($cod)) {
            $this->form_validation->set_message('exist_carta', 'El número elegido ya pertenece a un carta porte');
            return false;
        }
        return true;
    }

    function select($value) {

        if ($value == '0') {
            $this->form_validation->set_message('selects', 'Debe seleccionar al menos un tractor');
            return false;
        }
        return TRUE;
    }

}
