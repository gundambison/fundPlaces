<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
var $data;
	public function index()
	{
		$this->data['body']='home/front';
		$this->data['menus']=$this->home->menu();
		$this->load->view('base_view',$this->data);
	}

	function __construct()
	{
		$this->data['title']='Fundplace';
		$this->data['js_scripts']=array('jquery','bootstrap.min','jquery-ui.min');
		$this->data['css_scripts']=array('bootstrap','jquery-ui.min','font-awesome.min');
		
		parent::__construct();
		$this->load->model('home_model','home');
	}	
}