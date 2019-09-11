<?php

defined('BASEPATH') OR exit('No direct script access allowed');
// Al requerir el autoload, cargamos todo lo necesario para trabajar
require_once APPPATH . "/third_party/dompdf/autoload.inc.php";

use Dompdf\Dompdf;

class pdf {

   protected $ci;

  public function __construct()
  {
        $this->ci =& get_instance();
  }
    public function generate($view, $data ,$filename='Laporan',$paper = 'A4', $orientation = "landscape") {
        $dompdf= new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render(); 
        $dompdf->stream($filename.".pdf", array("Attachment" => FALSE));
    }
}
?>
