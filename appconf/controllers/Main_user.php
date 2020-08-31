<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session','form_validation'));
		$this->load->model('model_crud');
		$this->load->model('mberita');
		$this->load->model('mtahun');
		$this->load->model('mmenupmb');
		$this->load->model('mgelombang');
		$this->load->model('mmhsbaru');
		$this->load->model('mkonversi');
		$this->load->library('table');
		$this->data['tahun_pmb']=$this->mtahun->getThaPmb();
		$this->data['menupmb']=$this->mmenupmb->list_menu_pmb();
		$this->data['menukulum']=$this->mmenupmb->list_menu_kulum();
		$this->data['menupsu']=$this->mmenupmb->list_menu_psu();
		$this->data['menureg']=$this->mmenupmb->list_menu_reg();
		$this->data['menudownload']=$this->mmenupmb->list_menu_download_center();
		$this->data['biodata']=$this->model_crud->selectData('calonsiswa',array('email'=>$this->session->userdata['email']))->row_array();
		$this->data['akun']=$this->model_crud->selectData('registrasi_pmb',array('email'=>$this->session->userdata['email']))->row_array();
		$this->data['bukti']=$this->model_crud->selectData('dokumen_pmb',array('nodaf'=>$this->data['biodata']['nodaf'],'jenis_dokumen'=>'bukti_bayar'))->row_array();
		
	}
	

	public function index()
	{
		if(empty($this->session->userdata['username'])){ redirect(base_url());  }

		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';	
		$this->data['konten']='user/view_biodata';
		
		$this->data['jenis_mhs']=$this->model_crud->selectData('MASTER_JENISMHS');
		$this->data['relasi']=$this->model_crud->selectData('relasi_mhs');
		
		$this->load->view('view_main',$this->data);
	}

	public function profil()
	{
		if(empty($this->session->userdata['username'])){ redirect(base_url());  }

		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';	
		$this->data['konten']='user/view_biodata';
		
		$this->data['jenis_mhs']=$this->model_crud->selectData('MASTER_JENISMHS');
		$this->data['relasi']=$this->model_crud->selectData('relasi_mhs');
		
		$this->load->view('view_main',$this->data);
	}

	public function upload()
	{
		if(empty($this->session->userdata['username'])){ redirect(base_url());  }
		if (empty($this->data['biodata'])) { redirect(base_url('main_user')); }	
		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';	
		$this->data['konten']='user/view_biodata';
		
		$this->data['ijazah']=$this->model_crud->selectData('dokumen_pmb',array('nodaf'=>$this->data['biodata']['nodaf'],'jenis_dokumen'=>'ijazah'))->row_array();
		$this->data['skhu']=$this->model_crud->selectData('dokumen_pmb',array('nodaf'=>$this->data['biodata']['nodaf'],'jenis_dokumen'=>'skhu'))->row_array();
		$this->data['foto']=$this->model_crud->selectData('dokumen_pmb',array('nodaf'=>$this->data['biodata']['nodaf'],'jenis_dokumen'=>'foto'))->row_array();
		$this->data['ktp']=$this->model_crud->selectData('dokumen_pmb',array('nodaf'=>$this->data['biodata']['nodaf'],'jenis_dokumen'=>'ktp'))->row_array();
		$this->data['bukti']=$this->model_crud->selectData('dokumen_pmb',array('nodaf'=>$this->data['biodata']['nodaf'],'jenis_dokumen'=>'bukti_bayar'))->row_array();
		$this->load->view('view_main',$this->data);
		
	}

	public function info(){
		if (empty($this->session->userdata['username'])) { redirect(base_url()); }
		if (empty($this->data['biodata'])) { redirect(base_url('main_user')); }
		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';
		$this->data['konten']='user/view_biodata';
		$this->load->view('view_main',$this->data);
	}

	public function setting_biodata()
	{
		if (empty($this->session->userdata['username'])) { redirect(base_url()); }

		error_reporting(1);
		//if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$_POST['tgllahir'])) {
			//echo "<center>Format pengisian tanggal lahir tidak sesuai <input type=button value=Go Back onclick=history.back(-1) /></center>";
		//} 

		$nodaf=$this->model_crud->genNodaf($this->data['tahun_pmb']);
		$noref=$this->model_crud->nomor_referensi($nodaf);
		$gelombang=$this->mgelombang->cek_daftar(array('thn_akademik'=>$this->data['tahun_pmb']));
		$pecah=explode('/',$_POST['jenis_mhs']);
		$tgllahir=$_POST['thnlahir'].'-'.$_POST['blnlahir'].'-'.$_POST['tgllahir'];
		$jenis_mhs=$pecah[0];
		$id_jenismhs=$pecah[1];
		$info=$_POST['info'];
		$data_checkbox="";	
		foreach($info as $data){
			$data_checkbox .= $data . ",";
		}
		$data_checkbox = substr($data_checkbox, 0, -1);	
		$this->data['biodata']=$this->model_crud->selectData('calonsiswa',array('email'=>$this->session->userdata['email']))->row_array();

		if (empty($this->data['biodata'])) {
			$data=array('nodaf'=>$nodaf,
				'noref'=>$noref,
				'jenis_mhs'=>$jenis_mhs,
				'id_jenismhs'=>$id_jenismhs,
				'kelas'=>$_POST['kelas'],
				'pilihan1'=>$_POST['pilihan1'],
				'pilihan2'=>$_POST['pilihan2'],
				'nama'=>$_POST['nama'],
				'nikktp'=>$_POST['nik'],
				'tempatlahir'=>$_POST['tempatlahir'],
				'tgllahir'=>$tgllahir,
				'sekolah'=>$_POST['sekolah'],
				'jurusan'=>$_POST['jurusan'],
				'alamat'=>$_POST['alamat'],
				'rt'=>$_POST['rt'],
				'rw'=>$_POST['rw'],
				'nem'=>$_POST['nem'],
				'kelurahan'=>$_POST['kelurahan'],
				'kecamatan'=>$_POST['kecamatan'],
				'kabupaten'=>$_POST['kabupaten'],
				'propinsi'=>$_POST['propinsi'],
				'kodepos'=>$_POST['kodepos'],
				'agama'=>$_POST['agama'],
				'telepon'=>$_POST['telepon'],
				'nama_ortu'=>$_POST['nama_ortu'],
				'alamatortu'=>$_POST['alamat_ortu'],
				'rt_ortu'=>$_POST['rt_ortu'],
				'rw_ortu'=>$_POST['rw_ortu'],
				'kelurahan_ortu'=>$_POST['kelurahan_ortu'],
				'kecamatan_ortu'=>$_POST['kecamatan_ortu'],
				'kabupaten_ortu'=>$_POST['kabupaten_ortu'],
				'propinsi_ortu'=>$_POST['propinsi_ortu'],
				'kodepos_ortu'=>$_POST['kodepos_ortu'],
				'telp_ortu'=>$_POST['telp_ortu'],
				'email'=>$_POST['email'],
				'komentar'=>$data_checkbox,
				'jk'=>$_POST['jk'],
				'thn_akademik'=>$this->data['tahun_pmb'],
				'gelombang'=>$gelombang['kode'],
				'tgldaftar'=>date('Y-m-d'),
				'id_relasi'=>$_POST['relasi'],
					//'tgl_tes'=>date('Y-m-d'),
				'biaya_pendaftaran'=>150000,
				'status'=>0,
				'nama_cs'=>'ADMINTEST',
				'kode_kerjasama'=>1,
				'syarat1'=>'Tidak Lengkap',
				'syarat2'=>'Belum',
				'catatan'=>'Test',
				'wawancara'=>'Belum',
				'status_registrasi'=>$_POST['status_reg'],
				'no_kipk'=>$_POST['no_kipk'],
				'tahun_lulus'=>$_POST['thn_lulus']
			);
			$this->model_crud->insertData('calonsiswa',$data);
		} else {

			$data2=array(
				'jenis_mhs'=>$jenis_mhs,
				'id_jenismhs'=>$id_jenismhs,
				'kelas'=>$_POST['kelas'],
				'pilihan1'=>$_POST['pilihan1'],
				'pilihan2'=>$_POST['pilihan2'],
				'nama'=>$_POST['nama'],
				'nikktp'=>$_POST['nik'],
				'tempatlahir'=>$_POST['tempatlahir'],
				'tgllahir'=>$tgllahir,
				'sekolah'=>$_POST['sekolah'],
				'jurusan'=>$_POST['jurusan'],
				'alamat'=>$_POST['alamat'],
				'rt'=>$_POST['rt'],
				'rw'=>$_POST['rw'],
				'nem'=>$_POST['nem'],
				'kelurahan'=>$_POST['kelurahan'],
				'kecamatan'=>$_POST['kecamatan'],
				'kabupaten'=>$_POST['kabupaten'],
				'propinsi'=>$_POST['propinsi'],
				'kodepos'=>$_POST['kodepos'],
				'agama'=>$_POST['agama'],
				'telepon'=>$_POST['telepon'],
				'nama_ortu'=>$_POST['nama_ortu'],
				'alamatortu'=>$_POST['alamat_ortu'],
				'rt_ortu'=>$_POST['rt_ortu'],
				'rw_ortu'=>$_POST['rw_ortu'],
				'kelurahan_ortu'=>$_POST['kelurahan_ortu'],
				'kecamatan_ortu'=>$_POST['kecamatan_ortu'],
				'kabupaten_ortu'=>$_POST['kabupaten_ortu'],
				'propinsi_ortu'=>$_POST['propinsi_ortu'],
				'kodepos_ortu'=>$_POST['kodepos_ortu'],
				'telp_ortu'=>$_POST['telp_ortu'],
				'email'=>$_POST['email'],
				'komentar'=>$data_checkbox,
				'jk'=>$_POST['jk'],
				'id_relasi'=>$_POST['relasi'],
				'status_registrasi'=>$_POST['status_reg'],
				'no_kipk'=>$_POST['no_kipk'],
				'tahun_lulus'=>$_POST['thn_lulus']
			);
			$this->model_crud->updateData('calonsiswa',$data2,array('nodaf'=>$this->data['biodata']['nodaf']));
			
		}

		
		$this->session->set_flashdata('info',"Data Berhasil diubah");
		redirect(base_url('main_user'));


	}

	function post_dokumen(){
		if (empty($this->session->userdata['username'])) { redirect(base_url()); }


		if ($_GET['act']=='ijazah') {
			$config['upload_path']    ='/var/www/clients/client1/web1/web/pmb-amikom/dokumen/ijazah';
			$config['allowed_types']  = 'jpg|jpeg|png|pdf';
			$config['max_size']       = '4000';
			$config['max_width']      = '4000';
			$config['max_height']     = '4000';
			$config['file_name']      = 'ijazah-'.$_POST['nodaf'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload("ijazah")) {
				echo "<center>File belum dipilih atau tipe file yang diupload tidak sesuai <input type=button value=<<Back onclick=history.back(-1) /></center>";
			}else{

				$this->model_crud->insertData('dokumen_pmb',array('jenis_dokumen'=>'ijazah','nodaf'=>$_POST['nodaf'],'nama_dokumen'=>$this->upload->data('file_name')));
				$this->session->set_flashdata('info',"Data Berhasil ditambahkan");
				redirect(base_url('main_user/upload?act=det'));
			} 
			
		}

		if ($_GET['act']=='skhu') {
			$config['upload_path']    ='/var/www/clients/client1/web1/web/pmb-amikom/dokumen/skhu';
			$config['allowed_types']  = 'jpg|jpeg|png|pdf';
			$config['max_size']       = '4000';
			$config['max_width']      = '4000';
			$config['max_height']     = '4000';
			$config['file_name']      = 'skhu-'.$_POST['nodaf'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload("skhu")) {
				echo "<center>File belum dipilih atau tipe file yang diupload tidak sesuai <input type=button value=Go Back onclick=history.back(-1) /></center>";
			}else{

				$this->model_crud->insertData('dokumen_pmb',array('jenis_dokumen'=>'skhu','nodaf'=>$_POST['nodaf'],'nama_dokumen'=>$this->upload->data('file_name')));
				$this->session->set_flashdata('info',"Data Berhasil ditambahkan");
				redirect(base_url('main_user/upload?act=det'));
			} 
			
		}

		if ($_GET['act']=='foto') {
			$config['upload_path']    ='/var/www/clients/client1/web1/web/pmb-amikom/dokumen/foto';
			$config['allowed_types']  = 'jpg|jpeg|png|pdf';
			$config['max_size']       = '4000';
			$config['max_width']      = '4000';
			$config['max_height']     = '4000';
			$config['file_name']      = 'foto-'.$_POST['nodaf'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload("foto")) {
				echo "<center>File belum dipilih atau tipe file yang diupload tidak sesuai <input type=button value=Go Back onclick=history.back(-1) /></center>";
			}else{

				$this->model_crud->insertData('dokumen_pmb',array('jenis_dokumen'=>'foto','nodaf'=>$_POST['nodaf'],'nama_dokumen'=>$this->upload->data('file_name')));
				$this->session->set_flashdata('info',"Data Berhasil ditambahkan");
				redirect(base_url('main_user/upload?act=det'));
			} 
			
		}

		if ($_GET['act']=='ktp') {
			$config['upload_path']    ='/var/www/clients/client1/web1/web/pmb-amikom/dokumen/ktp';
			$config['allowed_types']  = 'jpg|jpeg|png|pdf';
			$config['max_size']       = '4000';
			$config['max_width']      = '4000';
			$config['max_height']     = '4000';
			$config['file_name']      = 'ktp-'.$_POST['nodaf'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload("ktp")) {
				echo "<center>File belum dipilih atau tipe file yang diupload tidak sesuai <input type=button value=Go Back onclick=history.back(-1) /></center>";
			}else{

				$this->model_crud->insertData('dokumen_pmb',array('jenis_dokumen'=>'ktp','nodaf'=>$_POST['nodaf'],'nama_dokumen'=>$this->upload->data('file_name')));
				$this->session->set_flashdata('info',"Data Berhasil ditambahkan");
				redirect(base_url('main_user/upload?act=det'));
			} 
			
		}

		if ($_GET['act']=='bukti_bayar') {
			$config['upload_path']    ='/var/www/clients/client1/web1/web/pmb-amikom/dokumen/bukti_bayar';
			$config['allowed_types']  = 'jpg|jpeg|png|pdf';
			$config['max_size']       = '4000';
			$config['max_width']      = '4000';
			$config['max_height']     = '4000';
			$config['file_name']      = 'bukti_bayar-'.$_POST['nodaf'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload("bukti_bayar")) {
				echo "<center>File belum dipilih atau tipe file yang diupload tidak sesuai <input type=button value=Go Back onclick=history.back(-1) /></center>";
			}else{

				$this->model_crud->insertData('dokumen_pmb',array('jenis_dokumen'=>'bukti_bayar','nodaf'=>$_POST['nodaf'],'nama_dokumen'=>$this->upload->data('file_name')));
				$this->session->set_flashdata('info',"Data Berhasil ditambahkan");
				redirect(base_url('main_user/upload?act=det'));
			} 
			
		}

		if ($_GET['act']=='hapus') {
			

			$cari=$this->model_crud->selectData('dokumen_pmb',array('id_dokumen'=>$_GET['id']))->row_array();
			$dokumen=$cari['jenis_dokumen'];
			$target='/var/www/clients/client1/web1/web/pmb-amikom/dokumen/'.$dokumen.'/'.$cari['nama_dokumen'];
			if (file_exists($target)) {
				unlink($target);
			}
			$this->model_crud->deleteData('dokumen_pmb',array('id_dokumen'=>$_GET['id']));



			$this->session->set_flashdata('info',"Data Berhasil dihapus");
			redirect(base_url('main_user/upload?act=det'));
			
		}

	}


	public function mulaiujian(){
		if (empty($this->session->userdata['username'])) { redirect(base_url()); }
		if (empty($this->data['biodata'])) { redirect(base_url('main_user')); }

		if ($this->cek_nilai()) {
			$this->session->set_flashdata('info',"Anda sudah mengikuti Ujian Online");
			redirect('main_user/hasilujian?act=det');
		}

		if ($this->cek_attempt()) {
			$this->session->set_flashdata('info',"Anda sudah mengikuti Ujian Online");
			redirect('main_user/ujianonline?act=det');
		}

		$this->load->model('msoal');
		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';
		$this->data['aturan_ujian']=$this->model_crud->selectData('tbl_pengaturan_ujian');
		$this->data['jumlah_soal']=$this->msoal->count_all();
		$this->data['konten']='user/view_biodata';
		$this->load->view('view_main',$this->data);
	}

	public function ujianonline(){
		if (empty($this->session->userdata['username'])) { redirect(base_url()); }
		if (empty($this->data['biodata'])) { redirect(base_url('main_user')); }

		if (!$this->cek_attempt()) {
			$this->session->set_flashdata('info',"Silakan memulai Ujian");
			redirect('main_user/mulaiujian?act=det');
		}

		if ($this->cek_nilai()) {
			$this->session->set_flashdata('info',"Anda sudah melakukan Ujian");
			redirect('main_user/hasilujian?act=det');
		}
		
		$this->load->model('msoal');
		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';
		$this->data['aturan_ujian']=$this->model_crud->selectData('tbl_pengaturan_ujian');
		$this->data['soal']=$this->msoal->get_soal();
		$this->data['jumlah_soal']=$this->msoal->count_all();
		$this->data['waktu_selesai']=$this->get_attempt_selesai();
		$this->data['konten']='user/view_biodata';
		$this->load->view('view_main',$this->data);
	}

	function postattempt(){
		if (empty($this->session->userdata['username'])) { redirect(base_url()); }
		
		if ($this->cek_attempt()) {
			$this->session->set_flashdata('info',"Sudah pernah ujian");
			redirect('main_user/mulaiujian?act=det');
		}
		$data = array(
			'id_user' => $this->session->userdata['username'],
			'waktu_mulai' => date('Y-m-d H:i:s'),
			'waktu_selesai' => date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +60 minutes"))
		);

		$this->model_crud->insertData('tbl_attempt',$data);
		$this->session->set_flashdata('info',"Berhasil mendapatkan Soal, Selamat Mengerjakan");
		redirect(base_url('main_user/ujianonline?act=det'));

	}

	function cek_attempt()
	{
		$this->load->model('mattempt');
		if ($this->mattempt->get_by('id_user', $this->session->userdata['username']))
			return true;
		return false;
	}

	function cek_nilai()
	{
		$this->load->model('mnilai');
		if ($this->mnilai->get_by('id_user', $this->session->userdata['username']))
			return true;
		return false;
	}

	function get_attempt_selesai()
	{
		$this->load->model('mattempt');
		if ($selesai = $this->mattempt->get_by('id_user', $this->session->userdata['username']))
			return $selesai->waktu_selesai;
		return false;
	}
	
	public function hasilujian(){
		if (empty($this->session->userdata['username'])) { redirect(base_url()); }
		if (empty($this->data['biodata'])) { redirect(base_url('main_user')); }
		if (!$this->cek_nilai()) {
			$this->session->set_flashdata('info',"Anda sudah mengikuti Ujian Online");
			redirect('main_user/ujianonline?act=det');
		}
		$this->load->model('mnilai');
		$this->data['content_title']='SELAMAT DATANG CALON MAHASISWA BARU UNIVERSITAS AMIKOM PURWOKERTO';
		$this->data['hasil_ujian']=$this->mnilai->get_by('id_user', $this->session->userdata['username']);
		$this->data['konten']='user/view_biodata';
		$this->load->view('view_main',$this->data);
	}

	function postjawaban(){
		if (empty($this->session->userdata['username'])) { redirect(base_url()); }
		$this->data['biodata']=$this->model_crud->selectData('calonsiswa',array('email'=>$this->session->userdata['email']))->row_array();

		if(isset($_POST['submit'])){
			$pilihan=$_POST['pilihan'];
			$id_soal=$_POST['id'];
			$jumlah=$_POST['jumlah'];
			
			$score=0;
			$benar=0;
			$salah=0;
			$kosong=0;
			
			for ($i=0;$i<$jumlah;$i++){
				//id nomor soal
				$nomor=$id_soal[$i];
				
				//jika user tidak memilih jawaban
				if (empty($pilihan[$nomor])){
					$kosong++;
				}else{
					//jawaban dari user
					$jawaban=$pilihan[$nomor];
					
					//cocokan jawaban user dengan jawaban di database
					$query=$this->db->query("select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
					$cek=$query->num_rows();
					
					if($cek){
						//jika jawaban cocok (benar)
						$benar++;
					}else{
						//jika salah
						$salah++;
					}
					
				} 
				
				$result=$this->db->query("select * from tbl_soal WHERE aktif='Y'");
				$jumlah_soal=$result->num_rows();
				$score = $benar*2;
				$hasil = number_format($score);
				//$score = 100/$jumlah_soal*$benar;
				//$hasil = number_format($score,1);
			}
		}
		//Lakukan Pengecekan  Data  dalam Database
		$id=$this->session->userdata['username'];
		$tgl_sekarang=date('Y-m-d');
		$qry1=$this->db->query("SELECT id_user FROM tbl_nilai WHERE id_user='$id'");
		$cek=$qry1->num_rows();
		if ($cek < 1) {
		//Pemberian kondisi lulus/ tidak lulus
			$qry2=$this->db->query("SELECT nilai_min FROM tbl_pengaturan_ujian");
			$q2=$qry2->result_array();
			foreach( $q2 as $row ) {
				$ceknilai= $row['nilai_min'];
			}
			if ($hasil >= $ceknilai) {
		//Lakukan Penyimpanan Kedalam Database
				$iduser= $this->session->userdata['username'];
				$nodaf= $this->data['biodata']['nodaf'];
				$this->db->query("INSERT INTO tbl_nilai (id_user,benar,salah,kosong,score,tanggal,keterangan,nodaf) Values ('$iduser','$benar','$salah','$kosong','$hasil','$tgl_sekarang','Lulus','$nodaf')");
			}else {
		//Lakukan Penyimpanan Kedalam Database
				$iduser= $this->session->userdata['username'];
				$nodaf= $this->data['biodata']['nodaf'];
				$this->db->query("INSERT INTO tbl_nilai (id_user,benar,salah,kosong,score,tanggal,keterangan,nodaf) Values ('$iduser','$benar','$salah','$kosong','$hasil','$tgl_sekarang','Tidak Lulus','$nodaf')");
			}
		}
		redirect(base_url('main_user/hasilujian?act=det'));

	}

}
