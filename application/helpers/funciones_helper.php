<?php

/**
 * Created by PhpStorm.
 * User: Lestat
 * Date: 11/04/2016
 * Time: 10:54
 */
function obtener_mes_id($mes) {
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    return $meses[$mes - 1];
}

function obtener_mes($fecha) {
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    return $meses[((int) date("n", $fecha)) - 1];
}

function day_start($time) {
    return mktime(0, 0, 0, date("m", $time), date("d", $time), date("Y", $time));
}

function horaOkk($param) {

    if (strlen($param) != 8) {
        return false;
    } else {
        $arrfecha = explode(" ", $param);
        $AmPm = $arrfecha[1];
        if ($AmPm != 'PM' && $AmPm != 'AM') {            
            return false;
        } else
        if (count($arrfecha) != 2) {            
            return false;
        } else {
            $arr = explode(":", $arrfecha[0]);
           
            if (count($arr) != 2) {
                return false;
            }
            $hora = $arr[0];
            $min = $arr[1];
             
if (!ctype_digit($hora) || !ctype_digit($min)) {
    return false;
}

            if ($hora > 12 || $hora < 0) {
                return false;
            } else if ($min > 59 || $min < 0) {
                return false;
            }
        }
    }

    return true;
}

function day_end($time) {
    return mktime(23, 59, 59, date("m", $time), date("d", $time), date("Y", $time));
}

function month_start($time) {
    return mktime(0, 0, 0, date("m", $time), 1, date("Y", $time));
}

function month_end($time) {
    return mktime(23, 59, 59, date("m", $time), date("t", $time), date("Y", $time));
}

function year_start($time) {
    return mktime(0, 0, 0, 1, 1, date("Y", $time));
}

function year_end($time) {
    return mktime(23, 59, 59, 12, 31, date("Y", $time));
}

function is_logged() {
    $CI = get_instance();
    return $CI->session->userdata("KPa9384jh2015");
}

function is_admin() {
    $CI = get_instance();
    return $CI->session->userdata("rol") == "administrador";
}

function is_usuario() {

    $CI = get_instance();
    return $CI->session->userdata("rol") == "usuario";
}

function my_input($field, $label, $placeholder, $required = TRUE, $value = null, $type = 'text') {
    return '<div class="form-group ' . (form_error($field) == '' ? '' : 'has-error') . '">' .
            '<label for="' . $field . '" class="col-sm-2 control-label">' . $label . ($required ? ' (*)' : '') . '</label>' .
            '<div class="col-sm-10">' .
            '<input type="' . $type . '" class="form-control" id="' . $field . '" name="' . $field . '" value="' . (isset($value) ? set_value($field, $value) : set_value($field)) . '" placeholder="' . $placeholder . '">' .
            '<span class="help-block">' . form_error($field) . '</span>' .
            ' </div>' .
            '</div>';
}

function my_input_date($field, $label, $placeholder, $required = TRUE, $value = null, $type = 'text') {
    return '<div class="form-group ' . (form_error($field) == '' ? '' : 'has-error') . '">' .
            '<label for="' . $field . '" class="col-sm-2 control-label">' . $label . ($required ? ' (*)' : '') . '</label>' .
            '<div class="col-sm-10">' .
            '<div class="input-group date">
                        <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                        </div>' .
            '<input type="' . $type . '" class="form-control" id="' . $field . '" name="' . $field . '" value="' . (isset($value) ? set_value($field, $value) : set_value($field)) . '" placeholder="' . $placeholder . '">' .
            ' </div>' .
            '<span class="help-block">' . form_error($field) . '</span>' .
            ' </div>' .
            '</div>';
}

function redireccionar() {
//    if (is_logged()) {
//        if (is_admin())
//            redirect(base_url('admin/home'));
//        else if (is_usuario())
//            redirect(base_url('usuarios'));
//    }
}

function toDate($date) {
    return date("d/m/Y H:i:s", $date);
}

function one_year_before() {
    $time = time();
    $year = date("Y", $time);
    $month = date("m", $time);
    $day = date("d", $time);
    return mktime(0, 0, 0, $month, $day - 365, $year);
}
