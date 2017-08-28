<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('menu_pdf');
	}
	
	public function pdf_blanco()
    {
        //Carga la librería que agregamos
        $this->load->library('mydompdf');
        //$saludo será una variable dentro la vista
        $data["saludo"] = "Hola mundo!";
        //$html tendrá el contenido de la vista
        $html= $this->load->view('pdf/blanco', $data, true);
        /*
         * load_html carga en dompdf la vista
         * render genera el pdf
         * stream ("nombreDelDocumento.pdf", Attachment: true | false)
         * true = forza a descargar el pdf
         * false = genera el pdf dentro del navegador
         */
        $this->html2pdf->paper('a4', 'portrait');
        $this->mydompdf->load_html($html);
        $this->mydompdf->render();
        $this->mydompdf->stream("pdf/welcome.pdf", array(
            "Attachment" => false
        ));
    }
		
		function header_footer()
		{
		    $this->load->library('mydompdf');
		    //Servirá para iterar y generar hojas para ver
		        //el header y footer en varias hojas
		    $data["numero"] = 250;
			
		    $html = $this->load->view('pdf/header_footer', $data, true);
			$html = utf8_decode($html);
		    
		    $this->mydompdf->load_html($html);
		    $this->mydompdf->render();

		        //Así se agrega css a la vista que queremos renderizar
		        //En la vista hay que agregarlo con link en el head del documento html
		    $this->mydompdf->set_base_path('plantila/Css/pdf.css'); //agregar de nuevo el css
		    $this->mydompdf->stream("welcome.pdf", array(
		        "Attachment" => false
		    ));
		}


}
?>