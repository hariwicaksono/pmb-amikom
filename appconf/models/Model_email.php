
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_email extends CI_Model 
{
    
	public function __construct()
    {
            $this->load->library('email');
            parent::__construct();
    }

    public function send_gmail($reciever="",$subject="",$message="",$attach="")
    {
 
        $config['protocol']='smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port']='465';
        $config['smtp_timeout']='30';
        $config['smtp_user']='imanudinsholeh20@gmail.com';
        $config['smtp_pass']='qpqfiwipiumncfty';
        $config['charset']='iso-8859-1';
        $config['newline']="\r\n";
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $this->email->from('imanudinsholeh20@gmail.com');
        $this->email->to($reciever); 

        $this->email->subject($subject);
        $this->email->message($message);
        if(!empty($attach)){
            $this->email->attach($attach);
        }
        if($this->email->send()){
            return "OK";
            
        }else{
            return "Failed";
        }


    }
}
?>