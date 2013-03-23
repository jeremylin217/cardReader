<?php
class Makeup extends CI_Controller {
	
	public function index()
	{
		$data['main'] = 'makeup/makeup';
        $data['title'] = '補課系統';                
        $this->load->view('default/layout', $data); 
	}
		
}
?>