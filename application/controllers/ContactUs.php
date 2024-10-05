<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	
	public function index()
	{

			if(null ===$this->session->userdata('bnr_ss')){
				$which = 'preheader';
				$mini_data['name']='';
				$mini_data['return']='preInit';
			}else{
				$which = 'header';
				$mini_data['name']=$this->session->userdata('full');
				$mini_data['return']='home';
			}
			
			$data['top'] = $this->load->view('partials/'.$which, $mini_data, TRUE);
			$dataFooter['modal_infor'] = $this->load->view('modals/modal-informacion', null, TRUE);
			$dataFooter['modal_pregu'] = $this->load->view('modals/modal-preguntas', null, TRUE);
			$dataFooter['modal_termin'] = $this->load->view('modals/modal-terminos', null, TRUE);
			$data['footer'] = $this->load->view('partials/footer', $dataFooter, TRUE);
	 		
			$this->load->view('contact',$data);
	}

}