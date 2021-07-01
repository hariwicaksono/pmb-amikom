<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('model_crud');
        $this->load->model('mberita');
        $this->load->model('mtahun');
        $this->load->model('mmenupmb');
        $this->load->model('mgelombang');
        $this->load->model('mmhsbaru');
        $this->load->model('msearch');
        $this->data['menupmb']=$this->mmenupmb->list_menu_pmb();
    }

	function getprop(){
        $kab=$this->input->post('kab');
        $kode_prop=$this->model_crud->selectData("Kabupaten",array('KdKab'=>$kab))->row_array();
        $coba=$this->model_crud->selectData("Propinsi",array('KdProp'=>$kode_prop['Kdprop']));
        foreach($coba->result() as $kel){
            echo "<option value=$kel->kdProp>$kel->NamaProp</option>";
            
        }
    }

    function getprop2(){
        $kab=$this->input->post('kab2');
       $kode_prop=$this->model_crud->selectData("Kabupaten",array('KdKab'=>$kab))->row_array();
        $coba=$this->model_crud->selectData("Propinsi",array('KdProp'=>$kode_prop['Kdprop']));
        foreach($coba->result() as $kel){
            echo "<option value=$kel->kdProp>$kel->NamaProp</option>";
            
        }
    }

    function get_jenismhs(){
        if ( ($_POST['status_reg']=='Hanya Daftar') ) {
            $jenis_mhs=$this->model_crud->selectData('MASTER_JENISMHS')->result_array();
            foreach ($jenis_mhs as $key) {
            ?>
                <option value="<?=$key['KODE_JENIS'].'/'.$key['ID_JENISMHS']?>"><?=$key['NAMA']?></option>
            <?php
            }
        }  else {
            echo '<option value="41/1">MAHASISWA BARU</option>';
        }
    }

    function get_pilihan(){
        $list_prodi=$this->db->query("select * from DEPARTMENT")->result_array();
        foreach ($list_prodi as $key ) {
        ?>
            <option value="<?=$key['KD_DEPT']?>"><?=$key['NAMA_DEPT_id']?></option>
        <?php
        }
    }

    function login_process () {

        $hasil=$this->model_crud->selectData('registrasi_pmb',array('username'=>$_POST['username']))->row_array();
       
        if (empty($hasil)) {
            echo "<div class='alert alert-warning'>username not found</div>";
        } else {
            if($hasil['password']==$_POST['password']){
                $this->session->set_userdata('username',$hasil['username']);
                 $this->session->set_userdata('nama',$hasil['nama']);
                 $this->session->set_userdata('email',$hasil['email']);
                    echo "ok";
                   
             }else{
                echo "<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Periksa kembali Username dan Password</div>";
                }
        }
    }

    function get_kelas(){

        if ( ($_POST['jenis_mhs']=='44/4') ) {
            echo '<option value="55201">INFORMATIKA S1</option>';
        } else  if ( ($_POST['status_reg']=='KIP-Kuliah2') ) {
            echo '<option value="55201">INFORMATIKA S1</option>';
            echo '<option value="55701">SISTEM INFORMASI S1</option>';
        } 
        else {
            $jurusan=$this->model_crud->selectData('department')->result_array();
            foreach ($jurusan as $key) {
            ?>
                <option value="<?=$key['KD_DEPT']?>"><?=$key['NAMA_DEPT']?></option>
            <?php
            }
        }

    }
    
    function get_kelas_sore(){
        if ($_POST['jenis_mhs']=='44/4') {
        echo '<option value=Sore>Sore</option>';
        } elseif($_POST['jenis_mhs']=='43/3') {
            echo '<option value=Transfer>Transfer</option>';
        } else {
            echo '<option value=Pagi>Pagi</option>';
            
        }
        
    } 

    function validasi_email (){
        $cek=$this->model_crud->selectData('registrasi_pmb',array('email'=>$_POST['email']))->result_array();

        if (!empty($cek)) {
            echo 'Email telah terdaftar.';
        } else {
            echo 'ok';
        }
    }


    function logout () {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function get_search(){
        if (isset($_GET['term'])) {
            $result = $this->msearch->search($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row['nama'],
                    'value' => $row['nodaf'],
                );
                echo json_encode($arr_result);
            }
        }
    }
    
    function search(){
        $query=$this->input->get('query');
        $this->data['data']=$this->msearch->search($query);
        $this->data['konten']='view_search';
        $this->load->view('view_main',$this->data);
    }

}
