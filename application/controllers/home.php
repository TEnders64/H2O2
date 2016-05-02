<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function testing()
	{
		$this->load->view('testing');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
