<?php
class Page extends CI_Controller{
//private $limit = 10;
	var $isi;
	var $judul;

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
	function index(){
		if (!empty($this->session->userdata['username'])) { redirect(base_url('main_user')); }
		$hasil=$this->mmenupmb->get_judul_tupoksi(13);
		foreach($hasil as $row){
			$this->judul=$row['judul_tupoksi'];
			$this->isi=$row['isi_tupoksi'];
		}
		$this->data['content_title']=$this->judul;
		$this->data['isi_tupoksi']=$this->isi;
		$this->data['konten']='view_home';
		$this->load->view('view_main',$this->data);
	}

	function Prosedur_pendaftaran($judul='',$hasil=''){
//Menu PMB
		$this->data['segment']=$this->uri->segment(3);
		if ($this->data['segment']=='Calon_mahasiswa_prestasi'){
			$hasil=$this->mmenupmb->get_judul_tupoksi(16);
		}
		else
			if ($this->data['segment']=='Calon_mahasiswa_reguler')
			{
				$hasil=$this->mmenupmb->get_judul_tupoksi(17);
			}
			else
				if ($this->data['segment']=='Calon_mahasiswa_pindahan')
				{
					$hasil=$this->mmenupmb->get_judul_tupoksi(27);
				}
				else
					if ($this->data['segment']=='Calon_mahasiswa_transfer')
					{
						$hasil=$this->mmenupmb->get_judul_tupoksi(28);
					}
					if(!empty($hasil)){
						foreach($hasil as $row){
							$this->judul=$row['judul_tupoksi'];
							$this->isi=$row['isi_tupoksi'];
						}
					}

					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul'] ='Prosedur_pendaftaran';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}

				function perlengkapan(){
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul'] ='perlengkapan';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function Prosedur_Registrasi($judul=''){
//Menu PMB
					$hasil=$this->mmenupmb->get_judul_tupoksi(18);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul'] ='Prosedur_Registrasi';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function Beasiswa($judul=''){
//Menu PMB
					$hasil=$this->mmenupmb->get_judul_tupoksi(30);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul'] ='Beasiswa';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function Alur_pendaftaran($judul=''){
//Menu PMB
					$hasil=$this->mmenupmb->get_judul_tupoksi(31);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul'] ='Beasiswa';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function faq($judul=''){
//Menu PMB
					$hasil=$this->mmenupmb->get_judul_tupoksi(33);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul'] ='Beasiswa';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function Kegiatan_Pra_Kuliah_Mahasiswa_Baru($judul=''){
//Menu PMB
					$hasil=$this->mmenupmb->get_judul_tupoksi(19);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul'] ='Prosedur_Registrasi';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function Bentuk_dan_Waktu_Pelaksanaan(){

					$hasil=$this->mgelombang->getGelombang($this->data['tahun_pmb']);
					$this->load->library('table');
					foreach($hasil as $row){
						$this->table->add_row('-','Gel. '.$row['gelombang'], ' : ',date('d-M-Y',strtotime($row['tgl_mulai'])) . ' - ' . date('d-M-Y',strtotime($row['tgl_selesai'] )));
						if ($row['gelombang']=='Khusus'){ $ket='Tanpa Test Tertulis (Pendaftaran Dibatasi 70 Pendaftar Pertama)';} else {$ket='Setiap hari Sabtu Jam 10.00 WIB di Ruang Aula UNIVERSITAS AMIKOM Purwokerto';}
						$this->table->add_row('','Test Tertulis',' : ',$ket);
						$this->table->add_row('','Wawancara',' : ','Setiap Hari Senin Jam 09.00 WIB');
					}
					$this->data['isi_tupoksi'] = $this->table->generate();
					$this->data['content_title']='Bentuk dan Waktu Pelaksanaan Penerimaan Mahasiswa Baru';
					$this->data['modul'] ='Bentuk_dan_Waktu_Pelaksanaan';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function Jenis_Pendaftaran(){
					$hasil=$this->mmenupmb->get_judul_tupoksi(14);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul']=$this->uri->segment(2);
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function Organisasi_Pelaksana_Penerimaan_Mahasiswa_Baru(){
					$hasil=$this->mmenupmb->get_judul_tupoksi(20);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul']=$this->uri->segment(2);
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function Tata_Tertib_Penerimaan_Mahasiswa_Baru(){
					$hasil=$this->mmenupmb->get_judul_tupoksi(21);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul']=$this->uri->segment(2);
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function datamhs(){					
					$this->form_validation->set_rules('katakunci', '<b>Kata kunci untuk pencarian</b>', 'required|alpha_dash|xss_clean');
					$this->form_validation->run();	
					$this->data['searchkey']=$this->input->post('katakunci');
					$this->data['kodegel']=$this->uri->segment(3);
					$this->data['tahun_pmb']=$this->mtahun->getThaPmb();
					$this->data['glmb']=$this->mgelombang->getNmKdGel($this->data['tahun_pmb']);
					$this->data['datamhs']=$this->mmhsbaru->getmhsbaru($this->data['tahun_pmb'],$this->data['kodegel'],strtoupper($this->data['searchkey']));				
					$this->data['modul']='datamhs';
					$this->data['content_title']='DAFTAR CALON MAHASISWA BARU';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function biodata(){
					$this->data['content_title']='BIODATA MAHASISWA BARU';
					$this->data['nodaf']=$this->uri->segment(3);
					$this->data['biodata']=$this->mmhsbaru->getmhsbaruLengkap($this->data['nodaf']);
					foreach($this->data['biodata'] as $row){
						$this->table->add_row('No Pendaftaran',' : ',$row['nodaf']);
						$this->table->add_row('Nama Pendaftar',' : ',$row['nama']);
						$this->table->add_row('Jenis Kelamin',' : ',$row['jk']);
						$this->table->add_row('Asal Sekolah',' : ',$row['sekolah']);
						$this->table->add_row('Alamat Asal',' : ',$row['alamat']);
						$this->table->add_row('Kabupaten',' : ',$row['NamaKab']);
						$this->table->add_row('Nama Propinsi',' : ',$row['NamaProp']);
						$this->table->add_row('Tanggal Daftar',' : ',$row['tglpendaftaran']);
						$this->table->add_row('mgelombang',' : ',$row['gelombang']);
						$this->table->add_row('Tanggal Ujian',' : ',$row['tglujian']);
						$this->table->add_row('Keterangan',' : ',$row['ket_lulus']);     
					}
					$this->data['isi_tupoksi'] = $this->table->generate();
					$this->data['modul']='biodata';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				
//kulum
				function Tentang_Kuliah_Umum(){
					$hasil=$this->mmenupmb->get_judul_tupoksi(25);
					foreach($hasil as $row){ 
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul']=$this->uri->segment(2);
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
//Tentang PSU
				function Tentang_PSU(){
					$hasil=$this->mmenupmb->get_judul_tupoksi(26);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']=$this->judul;
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul']=$this->uri->segment(2);
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}

//Jadwal Kuliah Umum
				function Jadwal_Kuliah_Umum(){

					$kulum=$this->mmenupmb->get_jadwal_kulum($this->data['tahun_pmb']) ;
					$h1 = array('data' => 'NO', 'class' => 'highlight', 'bgcolor' => '#663399');
					$h2 = array('data' => 'gelombang', 'class' => 'highlight', 'bgcolor' => '#663399');
					$h3 = array('data' => 'Angkatan', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'15%');
					$h4 = array('data' => 'Hari', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'15%');
					$h5 = array('data' => 'Tanggal', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'20%');
					$h6 = array('data' => 'Jam', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'15%');
					$h7 = array('data' => 'Ruang', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'25%');
					$this->table->set_empty("&nbsp;");
					$this->table->set_heading($h1,$h2,$h3,$h4,$h5,$h6,$h7);
					$i = 0;
					foreach($kulum as $row){
						$i++;
						$cell1 = array('data' => $i, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell2 = array('data' => $row->gelombang, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell3= array('data' => $row->ANGKATAN, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell4 = array('data' => $this->hari($row->KULIAH_UMUM), 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell5 = array('data' => date('d-m-Y',strtotime($row->KULIAH_UMUM)), 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell6 = array('data' => date('h:i',strtotime($row->KULIAH_UMUM)).' WIB', 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell7 = array('data' => 'Ruang Aula', 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$this->table->add_row($cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);       
					}
					$this->data['content_title']='JADWAL KULIAH UMUM';
					$this->data['isi_tupoksi']=$this->table->generate();
					$this->data['modul']=$this->uri->segment(2);
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
//Jadwal PSU
				function Jadwal_kegiatan(){

					$hasil=$this->mmenupmb->get_judul_tupoksi(32);
					foreach($hasil as $row){
						$this->judul=$row['judul_tupoksi'];
						$this->isi=$row['isi_tupoksi'];
					}
					$this->data['content_title']='KEGIATAN PENERIMAAN MAHASISWA BARU TAHUN AKADEMIK '.$this->data['tahun_pmb'];
					$this->data['isi_tupoksi']=$this->isi;
					$this->data['modul'] ='Jadwal Kegiatan';
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function list_angkatan_psu($id_jadwal_psu=''){
					$id_jadwal_psu=$this->uri->segment(3);

					$kulum=$this->mmenupmb->get_peserta_PSU($id_jadwal_psu) ;
					$h1 = array('data' => 'NO', 'class' => 'highlight', 'bgcolor' => '#663399');
					$h2 = array('data' => 'No Daftar', 'class' => 'highlight', 'bgcolor' => '#663399');
					$h3 = array('data' => 'Nama', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'40%');
					$h4 = array('data' => 'Jenis Kelamin', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'15%');
					$h5 = array('data' => 'Asal Sekolah', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'30%');
					$h7 = array('data' => 'Ruang', 'class' => 'highlight', 'bgcolor' => '#663399','width'=>'15%');
					$this->table->set_empty("&nbsp;");
					$this->table->set_heading($h1,$h2,$h3,$h4,$h5,$h7);
					$i = 0;
					foreach($kulum as $row){
						$i++;
						$cell1 = array('data' => $i, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell2 = array('data' =>  $row->NODAF, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell3= array('data' => $row->NAMA, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell4 = array('data' => $row->JK, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell5 = array('data' =>  $row->SEKOLAH, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$cell7 = array('data' => $row->RUANG, 'class' => 'highlight', 'bgcolor' => '#FF6600');
						$this->table->add_row($cell1,$cell2,$cell3,$cell4,$cell5,$cell7);       
					}
					$this->data['content_title']="JADWAL PELATIHAN SUPER UNGGUL Angkatan $id_jadwal_psu";
					$this->data['isi_tupoksi']=$this->table->generate();
					$this->data['modul']=$this->uri->segment(2);
					$this->data['konten']='view_isi';
					$this->load->view('view_main',$this->data);
				}
				function download(){
					$nama_file=$this->uri->segment(3);
					$tahun=str_replace("/","-",$this->mtahun->getThaPmb());
					if ($nama_file=='brosur'){
						$nama_download="brosur-$tahun.pdf";
					}
					else if($nama_file=='rincian_biaya'){
						$nama_download="rincian_biaya-$tahun.pdf";
					}
					else if ($nama_file=='PSU'){
						$nama_download="psu-$tahun.pdf";
					}
					$url="/var/www/clients/client1/web1/web/pmb-amikom/doc/";

					$filePath=$url.$nama_download;
					
					if(!empty($filePath)){ 


						$this->load->helper('download');
    $data = file_get_contents($filePath); // Read the file's contents

    force_download($nama_download, $data); 
/*  
  // force_download($filename, $url.$ket."/");
			header('HTTP/1.1 200 OK');
			header('Date: ' . date("D M j G:i:s T Y"));
			header('Last-Modified: ' . date("D M j G:i:s T Y"));
			header("Content-Type: application/force-download");
			#header("Content-Lenght: " . (string)(filesize($url)));
			header("Content-Transfer-Encoding: Binary");
			header("Content-Disposition: attachment; filename=".basename($nama_download));
*/
		}
	}
	function hari($tgl){
		$nama_hari = date("l",strtotime($tgl)); 
		switch($nama_hari) 
		{ 
			case "Monday": 
			$indonesian = "Senin"; 
			break; 
			case "Tuesday": 
			$indonesian = "Selasa"; 
			break; 
			case "Wednesday": 
			$indonesian = "Rabu"; 
			break; 
			case "Thursday": 
			$indonesian = "Kamis"; 
			break; 
			case "Friday": 
			$indonesian = "Jumat"; 
			break; 
			case "Saturday": 
			$indonesian = "Sabtu";
			break; 
			default: 
			$indonesian = "Minggu";

		}
		return $indonesian;
	}

	function registrasi() {
		$this->load->library('email');
		$this->load->model('memail');
		$this->data['konten']='view_daftar';
		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';
		if (isset($_POST['nama'])) {
			$cek=$this->model_crud->selectData('registrasi_pmb',array('email'=>$_POST['email']))->result_array();
			if (!empty($cek)) { ?>
				<script type="text/javascript">
					alert('Email telah terdaftar');
					history.go(-1);
				</script>
			<?php } else {
				$this->model_crud->insertData('registrasi_pmb',array('username'=>$_POST['username'],'nama'=>$_POST['nama'],'telp'=>$_POST['telp'],'email'=>$_POST['email'],'password'=>$_POST['password']));
				
				$this->memail->email_reg($_POST['email']);
				$this->session->set_flashdata('info',"Proses daftar akun berhasil, silahkan Login untuk melakukan Pendaftaran PMB");
				redirect(base_url('page/registrasi'));
			}
		}

		$this->load->view('view_main',$this->data);
	}

	function register() {
		$this->load->library('email');
		$this->load->model('memail');
		$this->data['konten']='view_register';
		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';
		if (isset($_POST['nama'])) {
			$cek=$this->model_crud->selectData('registrasi_pmb',array('email'=>$_POST['email']))->result_array();
			if (!empty($cek)) { ?>
				<script type="text/javascript">
					alert('Email telah terdaftar');
					history.go(-1);
				</script>
			<?php } else {
				$this->model_crud->insertData('registrasi_pmb',array('username'=>$_POST['username'],'nama'=>$_POST['nama'],'telp'=>$_POST['telp'],'email'=>$_POST['email'],'password'=>$_POST['password']));
				
				$this->memail->email_reg($_POST['email']);
				$this->session->set_flashdata('info',"Proses daftar akun berhasil, silahkan Login untuk melakukan Pendaftaran PMB");
				redirect(base_url('page/registrasi'));
			}
		}

		$this->load->view('view_main',$this->data);
	}

	function login() {
		$this->data['konten']='view_login';
		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';
		$this->load->view('view_main',$this->data);
	}


}

