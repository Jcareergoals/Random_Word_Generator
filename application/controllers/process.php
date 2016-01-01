<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class process extends CI_Controller {
	public function index()
	{
		$this->load->view('index'); 
	}
	public function random()
	{
		if($this->session->userdata('counter'))
		{
			// increment session counter if not set
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter + 1);
		}
		else 
		{
			// set session counter to be incremented
			$this->session->set_userdata('counter', 1);
		}
		$random_word = bin2hex(openssl_random_pseudo_bytes(7));
		$this->session->set_userdata('random_word', $random_word);
		redirect("/");
	}
}