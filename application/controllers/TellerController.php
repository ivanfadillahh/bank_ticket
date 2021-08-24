<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TellerController extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        
        $this->load->model('m_bank');
		date_default_timezone_set('Asia/Jakarta');

    }

    public function index() 
	{
        $datacontent['ade'] = "ade";
        $this->template->view('template/teller',$datacontent);
    }

    public function get_last_cs()
    {
        $result = $this->m_bank->get_last_cs();
        echo json_encode($result);
    }

    public function get_last_teller()
    {
        $result = $this->m_bank->get_last_teller();
        echo json_encode($result);
    }

}