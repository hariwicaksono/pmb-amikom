<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	   	date_default_timezone_set('Asia/Jakarta');
	   	$this->load->library('session');
	   	$this->load->library('fpdf.php');
	   	$this->load->helper(array('form', 'url','file'));
		$this->load->model('model_crud');
		$this->load->model('mberita');
		$this->load->model('mtahun');
		$this->load->model('mmenupmb');
		$this->load->model('mgelombang');
		$this->load->model('mmhsbaru');
		$this->load->model('mkonversi');
		$this->data['tahun_pmb']=$this->mtahun->getThaPmb();
		$this->data['menupmb']=$this->mmenupmb->list_menu_pmb();
		$this->data['menukulum']=$this->mmenupmb->list_menu_kulum();
		$this->data['menupsu']=$this->mmenupmb->list_menu_psu();
		$this->data['menureg']=$this->mmenupmb->list_menu_reg();
		$this->data['menudownload']=$this->mmenupmb->list_menu_download_center();
		$this->data['biodata']=$this->model_crud->selectData('calonsiswa',array('email'=>$this->session->userdata['email']))->row_array();
		
	}

	function kartu() {
		if (empty($this->session->userdata['username'])) redirect(base_url());
		if (empty($this->data['biodata'])) { redirect(base_url('main_user')); }	
		if (!empty($this->data['biodata'])) { 
			if ($this->data['biodata']['syarat2']!='Sudah') {
				redirect(base_url('main_user'));
			}
		}	

		$pdfFilePath ="registrasi-".time()."-download.pdf";
 
        
        //actually, you can pass mPDF parameter on this load() function
        //$pdf = $this->m_pdf->load();
        $mpdf = new \Mpdf\Mpdf();
        $html=$this->load->view('pdf/kartu.php',$this->data, true);

        //generate the PDF!
        $mpdf->WriteHTML($html);
        
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$mpdf->Output($pdfFilePath, "I");
 

	}

	function surat_lolos_seleksi() {
		if (empty($this->session->userdata['username'])) redirect(base_url());
		if (empty($this->data['biodata'])) { redirect(base_url('main_user')); }	
		if (!empty($this->data['biodata'])) { 
			if ($this->data['biodata']['ket_lulus']!='Lulus') {
				$this->session->set_flashdata('info',"Proses Seleksi belum selesai, mohon tunggu terlebih dahulu");
				redirect(base_url('main_user'));
			}
		}	

		$pdfFilePath ="registrasi-".time()."-download.pdf";
 
        
        //actually, you can pass mPDF parameter on this load() function
        //$pdf = $this->m_pdf->load();
        $mpdf = new \Mpdf\Mpdf(['mode' => 'c']);
        $html=$this->load->view('pdf/surat_lolos_seleksi.php',$this->data, true);

        //generate the PDF!
        $mpdf->WriteHTML($html);
        
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$mpdf->Output($pdfFilePath, "I");
 

	}
	

	
	
	
}
