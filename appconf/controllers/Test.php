<?php
class Test extends CI_Controller{

    function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');
      $this->load->library('session');
      $this->load->model('model_crud');
      $this->load->model('mberita');
      $this->load->model('mtahun');
      $this->load->model('mmenupmb');
      $this->load->model('mgelombang');
      $this->load->model('mmhsbaru');
      $this->load->model('mkonversi');
      $this->load->model('mjumlah');
      $this->load->library('form_validation');
      $this->load->helper('url');
      $this->load->library('table');
      $this->data['tahun_pmb']=$this->mtahun->getThaPmb();
      $this->data['menupmb']=$this->mmenupmb->list_menu_pmb();
      $this->data['menukulum']=$this->mmenupmb->list_menu_kulum();
      $this->data['menupsu']=$this->mmenupmb->list_menu_psu();
      $this->data['menureg']=$this->mmenupmb->list_menu_reg();
      $this->data['menudownload']=$this->mmenupmb->list_menu_download_center();
    }

    public function index(){
      if (!empty($this->session->userdata['username'])) { redirect(base_url('main_user')); }
      $tahun_lalu = '2020/2021';
      $this->data['jumlah_akun'] = $this->mjumlah->count_akun();
      $this->data['jumlah_calonsiswa'] = $this->mjumlah->count_calonsiswa();
      $this->data['jumlah_tahunlalu'] = $this->mjumlah->count_tahunlalu($tahun_lalu);
      $this->data['jumlah_beasiswa'] = $this->mjumlah->count_beasiswa($tahun_lalu);
      $this->data['konten']='view_test';
      $this->load->view('view_main',$this->data);
    }


}