<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template{
	private $ci;
		
	public function __construct(){
		$this->ci =& get_instance();
	}
	
	public function loginpage()
	{
		$this->ci->load->view('template/login');
    }
    
	public function view($content, $datacontent=NULL, $data=NULL){
		if(!$this->is_ajax()){
			// if($user_number==1) {
			// 	$sidebar = "template/admin/sidebar";	
			// } else if($user_number==2) {
			// 	$sidebar = "template/content/sidebar";
			// }
			
			// $template['sidebar'] = $this->ci->load->view($sidebar, $datacontent, TRUE);
			$template['content'] = $this->ci->load->view($content, $datacontent, TRUE);
			$this->ci->load->view('template/index', $template);
		}else{
			//$this->ci->load->view($content, $data);
		}
	}
	
	private function is_ajax(){
		return (
			$this->ci->input->server('HTTP_X_REQUESTED_WITH') &&
			($this->ci->input->server('HTTP_X_REQUESTED_WITH') ==
			'XMLHttpRequest'));
	}
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */