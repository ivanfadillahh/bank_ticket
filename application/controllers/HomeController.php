<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        
		date_default_timezone_set('Asia/Jakarta');

    }

    public function index() 
	{
        $datacontent['ade'] = "ade";
        $this->template->view('template/home',$datacontent);
        
    }
}