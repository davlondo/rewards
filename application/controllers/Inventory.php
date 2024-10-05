<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function index()
	{}

	public function regret()
	{
	
		if(null ===$this->session->userdata('bnr_ss')){
			$this->load->view('index');
		}else{
	 		$mini_data['name']=$this->session->userdata('full');
	 		$item_sku = $this->uri->segment(3);
	 		$this->load->database();

			$sqlUPD = "UPDATE inventory set used=(used-1), available=(total - (used - 1)) where item_id=$item_sku";
			$queryUPD = $this->db->query($sqlUPD);

			redirect('home');
		}
	}

}
