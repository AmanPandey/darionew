<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('footer');
	}


	public function about()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('about');
		$this->load->view('footer');
	}


	public function Services()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('services');
		$this->load->view('footer');
	}


	public function products()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('comming_soon');
		$this->load->view('footer');
	}


	public function contacts()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('contacts');
		$this->load->view('footer');
	}


	public function bookYourAppointment()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('comming_soon');
		$this->load->view('footer');
	}


	public function team()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('team');
		$this->load->view('footer');
	}
	


	
}




