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
	


	public function buy_residential()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('buy_residential');
		$this->load->view('footer');
	}


	public function buy_commerecial()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('buy_commercial');
		$this->load->view('footer');
	}


	public function buy_land()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('buy_land');
		$this->load->view('footer');
	}


	public function sell_residential()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('sell_residential');
		$this->load->view('footer');
	}


	public function sell_commerecial()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('sell_commercial');
		$this->load->view('footer');
	}


	public function sell_land()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('sell_land');
		$this->load->view('footer');
	}


	public function rent_wanted()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('rent_wanted');
		$this->load->view('footer');
	}


	public function rent_offered()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('rent_offered');
		$this->load->view('footer');
	}


	public function project_completed()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('comming_soon');
		$this->load->view('footer');
	}


	public function project_ongoing()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('comming_soon');
		$this->load->view('footer');
	}


	public function project_upcoming()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('comming_soon');
		$this->load->view('footer');
	}


	public function contact()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('contacts');
		$this->load->view('footer');
	}


	public function enquire_now()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('comming_soon');
		$this->load->view('footer');
	}
	

	public function blog()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	

	public function blog1()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('blog1');
		$this->load->view('footer');
	}
	

	public function blog2()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('blog2');
		$this->load->view('footer');
	}
	

	public function blog3()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('blog3');
		$this->load->view('footer');
	}
	

	public function blog4()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('blog4');
		$this->load->view('footer');
	}
	

	public function blog5()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('blog5');
		$this->load->view('footer');
	}
	

	public function blog6()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('blog6');
		$this->load->view('footer');
	}


	public function sitemap()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('site_map');
		$this->load->view('footer');
	}


	public function term_and_condition()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('term_and_condition');
		$this->load->view('footer');
	}


	public function career()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('career');
		$this->load->view('footer');
	}


	public function become_agent()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('become_agent');
		$this->load->view('footer');
	}


	public function request_sell()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('request_sell');
		$this->load->view('footer');
	}


	public function privacy_policy()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('privacy_policy');
		$this->load->view('footer');
	}


	public function property_list()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('property_list');
		$this->load->view('footer');
	}

	
	


	
}




