<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesertakkn extends CI_Controller {

	function  __construct() {
        parent::__construct();
        $this->load->model('register');
        $this->load->helper('form_helper');
        $this->load->helper(array('form'));
    }
    

	public function index()
	{

		redirect('pesertakkn/panelogin');

	}



public function panelogin()

{
	$this->load->view('form_login_mahasiswa');

}

}
