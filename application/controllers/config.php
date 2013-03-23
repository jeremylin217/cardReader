<?php
class Config extends CI_Controller {
	
	public function index()
	{
		$this->activityType(); 
	}

	public function semester()
	{
		$data['main'] = 'config/semester';
        $data['title'] = '系統設定/學期';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}

	public function activity()
	{
		$data['main'] = 'config/activity';
        $data['title'] = '系統設定/活動類型';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}

	public function course()
	{		
		$data['main'] = 'config/course';
        $data['title'] = '系統設定/場次與課程名稱';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}

	public function memo()
	{		
		$data['main'] = 'config/memo';
        $data['title'] = '系統設定/備註';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}

	public function memo_update()
	{		
		//$editedValue = $_GET['value'];
		$editedValue = $this->input->get_post('value', true);		
		echo $editedValue;		
	}




	public function college()
	{		
		$data['main'] = 'config/college';
        $data['title'] = '系統設定/學院';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}

	public function department()
	{		
		$data['main'] = 'config/department';
        $data['title'] = '系統設定/科系';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}

	public function identity()
	{		
		$data['main'] = 'config/identity';
        $data['title'] = '系統設定/身份別';        
        $this->load->vars($data);
        $this->load->view('default/layout', $data); 
	}
}
?>