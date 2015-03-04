<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 Deals Companies How it Works About Education Login
*/
class Home_model extends CI_Model 
{

	public function menu(){
		$data=array();
		$data[]=array('#', 'Deals');
		$data[]=array('#', 'Companies');
		$data[]=array('#', 'How it Works');
		$data[]=array('#', 'About');
		$data[]=array('#', 'Education');
		//$data[]=array('#', 'Login');
		
		return $data;
	}

public function __construct(){
/*
 Fundplaces 
*/
}

}