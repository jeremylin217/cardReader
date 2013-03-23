<?php
class Brush extends CI_Controller {
	
	public function index()
	{
		$this->attend(); 
	}

	public function attend()
	{
		$data['main'] = 'brush/attend';
        $data['title'] = '刷卡系統/上課';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}

	public function attend_update()
	{		
		//$editedValue = $_GET['value'];
		$editedValue = $this->input->get_post('edit', true);
		echo $editedValue;		
	}

	//----------------------------------------------------

	public function finish()
	{		
		$data['main'] = 'brush/finish';
        $data['title'] = '刷卡系統/下課';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}

	public function manual()
	{		
		$data['main'] = 'brush/manual';
        $data['title'] = '刷卡系統/手動輸入';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}
}
?>