<?php 
class Model_crud extends CI_model{
    
function updateData($tablename="",$dataupdate=array(),$where=array()){
            $this->db->update($tablename,$dataupdate,$where);
            
        }

     function insertData($tablename="",$data=array()){
        $this->db->insert($tablename,$data);
     }

     function selectData($tablename='',$data=array()){
        return $this->db->get_where($tablename,$data);
     }

     function deleteData($tablename='',$data=array()){
        $this->db->delete($tablename,$data);
     }

      function uploadGambar($nama_file='',$folder='') {
            $this->pathgambar= realpath(APPPATH . "../$folder");

            $config = array(
        'allowed_types' => 'jpg|png|gif|jpeg|pdf|doc|docx|ppt|pptx',
                'upload_path' => $this->pathgambar
            );
            
            $this->load->library('upload', $config);
            $this->upload->do_upload($nama_file);
            $file_data = $this->upload->data();
            $nama_file = $file_data['file_name'];

            return $nama_file;
        }

        function namaGambar($tabel='',$where='',$id = ''){
            $data = array();
            $this->db->select("*");
            $this->db->from($tabel);
            $this->db->where($where,$id);
            $hasil = $this->db->get();
            if($hasil->num_rows() > 0){
                return $hasil->row_array();
            }
        } 

        function deleteGambar($namagambar='',$folder=''){
            $this->pathgambar = realpath(APPPATH . "../$folder");
            unlink($this->pathgambar."/".$namagambar);
        }


        function genNodaf($ThaPmb,$startnum='0001'){
        $th=substr($ThaPmb,2,2);        
           
        
        $kode='OL';
        
                        
        $this->db->select("max(replace(replace(nodaf,'AO',''),'OL',''))+1 as nodaf");
        $this->db->from('calonsiswa');
        $this->db->where('thn_akademik',$ThaPmb);
        $hasil=$this->db->get()->row_array();
        
        $nodafe='';
        if(is_null($hasil['nodaf'])){
            $nodafe=$th.$startnum.$kode;            
        }else{
            $nodafe=$hasil['nodaf'].$kode;
        }
        return $nodafe;
        
    }
    
    function nomor_referensi($nodaf)
    {
        $angka1 = "12345";
        $angka2 = "67890";
        for ($x=0; $x < 6; $x++) 
        {
            mt_srand ((double) microtime() * 1000000);
            $angka_1[$x] = substr($angka1, mt_rand(0, strlen($angka1)-1), 1);
            $angka_2[$x] = substr($angka2, mt_rand(0, strlen($angka2)-1), 1);
        }
        
        $noref = $angka_1[0] . $angka_2[1] . $angka_1[2] . $angka_2[3] . $angka_1[4];
        $noref = $nodaf . $noref; 
        return $noref;
    }
}
?>

