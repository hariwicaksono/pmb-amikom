<?php
class Page_user extends CI_Controller{
//private $limit = 10;
var $isi;
var $judul;

function __construct(){
parent::__construct();
date_default_timezone_set('Asia/Jakarta');
$this->load->model('model_crud');
$this->load->model('mberita');
$this->load->model('mtahun');
$this->load->model('mmenupmb');
$this->load->model('mgelombang');
$this->load->model('mmhsbaru');
$this->load->library('form_validation');
$this->load->helper('url');
$this->load->library('table');
$this->data['tahun_pmb']=$this->mtahun->getThaPmb();
$this->data['menupmb']=$this->mmenupmb->list_menu_pmb();
$this->data['menukulum']=$this->mmenupmb->list_menu_kulum();
$this->data['menupsu']=$this->mmenupmb->list_menu_psu();
$this->data['menudownload']=$this->mmenupmb->list_menu_download_center();
}
function index(){

$this->data['konten']='user/view_biodata';
$this->load->view('view_main.php',$this->data);
}


}

