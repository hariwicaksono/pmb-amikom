<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Memail extends CI_Model
{
    function __construct(){
        
        parent::__construct();
        
    }

    public function email_reg($receiver){
        $from = "hari@amikompurwokerto.ac.id";    //senders email address
        $subject = 'Pendaftaran Akun PMB Berhasil - Universitas AMIKOM Purwokerto';  //email subject
        
        //sending confirmEmail($receiver) function calling link to the user, inside message body
        $message = '<h3>Hallo calon mahasiswa AMIKOM Purwokerto</h3><p>Email yang anda daftarkan: '.$this->input->post('email').'<br>Username: '.$this->input->post('username').'<br>Password: '.$this->input->post('password').'</p><br>Silahkan Login di pmb.amikompurwokerto.ac.id untuk melanjutkan Pendaftaran PMB<hr><br>Terima Kasih<br>Tim PMB AMIKOM Purwokerto';
        
        
        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = $from;
        $config['smtp_pass'] = 'amikom123456789';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from($from,'PMB Universitas AMIKOM Purwokerto');
        $this->email->to($receiver);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if($this->email->send()){
            echo "sent to: ".$receiver."<br>";
            echo "from: ".$from. "<br>";
            echo "protocol: ". $config['protocol']."<br>";
            echo "message: ".$message;
            return true;
        }else{
            echo "email send failed";
            return false;
        }
        
       
    }


}