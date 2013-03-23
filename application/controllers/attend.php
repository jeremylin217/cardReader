<?php
class Attend extends CI_Controller {
	
	public function index()
	{
		$data['main'] = 'attend/attend';
        $data['title'] = '出席系統';                
        $this->load->view('default/layout', $data); 
	}
	
}
?>