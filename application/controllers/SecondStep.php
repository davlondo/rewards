<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecondStep extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(null ===$this->session->userdata('bnr_ss')){
			redirect('preInit');
		}else{
			$data['preheader'] = $this->load->view('partials/preheader', NULL, TRUE);
			$data['lista'] = $this->load->view('partials/tplista', NULL, TRUE);
			$dataFooter['modal_infor'] = $this->load->view('modals/modal-informacion', null, TRUE);
			$dataFooter['modal_pregu'] = $this->load->view('modals/modal-preguntas', null, TRUE);
			$dataFooter['modal_termin'] = $this->load->view('modals/modal-terminos', null, TRUE);
			$data['footer'] = $this->load->view('partials/footer', $dataFooter, TRUE);
			#$data['sic_code'] = $this->load->view('formLogin', NULL, TRUE);
	 		
			$this->load->view('logged',$data);
		}
	}

	public function confirmSignature()
	{
		#$this->session;
		if(null ===$this->session->userdata('cc')){
			redirect('first');
		}else{
			$this->load->database();
			
			$newdata2 = array(
	                   'digits'  => $this->input->post('numberdoc')
	               );
			$this->session->set_userdata($newdata2);
			$digits = $this->input->post('numberdoc');
			#var_dump($this->session);
			#die;
			$sql = "SELECT id_mask from preload where sic_code={$this->session->userdata('cc')} and card_digits='{$digits}';";
			$query = $this->db->query($sql);
			
			if ($query->num_rows() > 0)
			{
				{
				  $hollowMan = $query->row(); 
				}
			   
			}else{
				echo "<script>alert('not found pending html');</script>)";
				redirect('first');
			}
			$newdata2 = array(
                   'hollow'  => $hollowMan->id_mask
               );
			$this->session->set_userdata($newdata2);
			redirect('home');
		}
	}
}
