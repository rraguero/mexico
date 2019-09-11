<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    public function __construct($config = array()) {
        parent::__construct($config);
    }

    public function valid_captcha($txt) {
        $time = time();
        $this->Captcha->del_expired($time);
        if (!$this->Captcha->exist_captcha($txt, $this->input->ip_address(), $time)) {
            $this->set_message('valid_captcha', "Incorrecto");
            return false;
        }
        return true;
    }

    public function alpha($txt) {
        if (preg_match("/^[a-zA-ZáúíéóñÑÁÉÍÚÓ,\- ]+$/", $txt) == false) {
            $this->set_message('alpha', "Este campo solo puede contener caracteres");
            return false;
        }
        return true;
    }

    public function alpha_dash($txt) {
        if (preg_match("/^([0-9a-zA-ZáúíéóñÑÁÉÍÚÓ_ ]|-)+$/", $txt) == false) {
            $this->set_message('alpha_dash', "Este campo solo puede contener caracteres, números o guión bajo");
            return false;
        }
        return true;
    }

    public function alpha_numeric($txt) {
        if (preg_match("/^[0-9a-zA-ZáúíéóñÑÁÉÍÚÓ ]+$/", $txt) == false) {
            $this->set_message('alpha_numeric', "Este campo solo puede contener caracteres y números");
            return false;
        }
        return true;
    }

    public function user_chars($txt) {
        if (preg_match("/^[0-9a-z_]+$/", $txt) == false) {
            $this->set_message('user_chars', "Este campo solo puede contener caracteres en minúscula, números y signo guión bajo");
            return false;
        }
        return true;
    }

    function check_date_format($date) {


        if (preg_match('/^([0-9]{1,2})[\/.-]([0-9]{1,2})[\/.-]([0-9]{4})$/', $date)) {

            if (checkdate(substr($date, 0, 2), substr($date, 3, 2), substr($date, 6, 4)))
                return true;
            else {
                $this->set_message('check_date_format', "El campo no contiene una fecha valida");
                return false;
            }
        } else {
            $this->set_message('check_date_format', "El campo no contiene una fecha valida");
            return false;
        }
    }

}
