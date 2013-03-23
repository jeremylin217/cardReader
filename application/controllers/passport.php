<?php
class Passport extends CI_Controller {
	
	public function index()
	{
		$data['main'] = 'passport/passport';
        $data['title'] = '刷卡系統/上課';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}
	
}
?>