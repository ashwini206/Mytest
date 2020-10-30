<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{		
		$this->load->view('include/header');
		$this->load->view('promocode');
		$this->load->view('include/footer');
	} 
	public function Users()
	{		
		$this->load->view('include/header');
		$this->load->view('users');
		//$this->load->view('include/footer');
	} 
	public function User_list()
	{		
		$this->load->view('include/header');
		$this->load->view('list');
		//$this->load->view('include/footer');
	} 

	public function All_user()
	{
		$this->load->view('include/header');
		$this->load->view('alluser');
		//$this->load->view('include/footer');
	}
	public function Add_promo()
	{		
		$this->load->view('include/header');
		$this->load->view('add_promopcode');
		$this->load->view('include/footer');
	} 
	public function Promo_view()
	{		
		$this->load->view('include/header');
		$this->load->view('promo_view');
		$this->load->view('include/footer');
	} 

	public function User_promocode()
	{		
		$this->load->view('include/header');
		$this->load->view('user_promo');
		$this->load->view('include/footer');
	} 
	public function Edit_promo()
	{		
		$this->load->view('include/header');
		$this->load->view('edit_promocode');
		$this->load->view('include/footer');
	} 
	public function Add_user()
	{		
		$this->load->view('include/header');
		$this->load->view('add_user');
		$this->load->view('include/footer');
	} 

	public function Promocode()
	{		
		$this->load->view('include/header');
		$this->load->view('promocode');
		//$this->load->view('include/footer');
	} 
	}
	?>
