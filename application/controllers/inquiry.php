<?php
class Inquiry extends CI_Controller {
	
	public function index()
	{
		$data['main'] = 'inquiry/inquiry';
		$data['title'] = '查詢系統';                
        $this->load->view('default/layout', $data); 
	}
		
}
?>