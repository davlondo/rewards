<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		if(null ===$this->session->userdata('bnr_ss')){
			redirect('first');
		}else{

			#var_dump($this->session);
			$this->load->database();
			$sql = "SELECT name,last_name, concat(name,' ',last_name) as 'fullname', segment,step from preload where sic_code={$this->session->userdata('cc')} and card_digits='{$this->session->userdata('digits')}';";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				{
				   $row = $query->row(); 
				   $seekSegment = $row->segment; 
				   $seekStep = $row->step; 
				   $seekFullName = $row->fullname; 
				   $seeFirstName = explode(' ',$row->name);
				   $checkMiddle =count($seeFirstName);
				   $seeLastName = explode(' ',$row->last_name);
				   $checkLast =count($seeLastName);
				   #var_dump($seeFirstName);
				   $seekFirstName = $seeFirstName[0];
				   if($checkMiddle>1){
					  $seekMiddleName= $seeFirstName[1];
				   }else{
					  $seekMiddleName= '';
				   }
				   				   
				   $seekLastName = $seeLastName[0];
				   
				   if($checkLast>1){
					  $seekSecondLastName = $seeLastName[1];
				   }else{
					  $seekSecondLastName = '';
				   }				   
				}
				
			$newdata2 = array(
                   'full'  => $seekFullName,
				   'first_name'  => $seekFirstName,
                   'middle_name' => $seekMiddleName,
				   'last_name' => $seekLastName,
				   'sec_last_name' => $seekSecondLastName
               );
			$this->session->set_userdata($newdata2);
			$mini_data['name']=$this->session->userdata('full');
			$data['header'] = $this->load->view('partials/header', $mini_data, TRUE);
			
			$sqlRedeemed = "SELECT (select count(1) from customer_goals where id_mask='".$this->session->userdata('hollow')."')-(".
			"SELECT count(1) from orders where id_mask='".$this->session->userdata('hollow')."') as total";
			$queryRedeemed = $this->db->query($sqlRedeemed);
			if ($queryRedeemed->num_rows() > 0)
				{
				   $total_available = $queryRedeemed->row(); 
				}
			
			$this->load->model('goals');

			$sortWeeks = array('pending' => $total_available->total, 'goal' => $this->goals->get_all_goals($seekSegment,$seekStep,$this->session->userdata('hollow')));

			$this->load->model('gifts');

			$itemsCatalog = array('pending' => $total_available->total,'items' => $this->gifts->get_all_gifts());

			echo $sql = "SELECT week as 'week_number',sg.goal as 'week_goal', g.name name, active_from_date as 'starting', active_to_date as 'ending' ,threshold as 'climb',(select count(1) from customer_goals where id_mask='".$this->session->userdata('hollow')."' and load_date between sg.active_from_date and sg.active_to_date) as 'reached', (select if ((select count(1) from customer_goals where id_mask='".$this->session->userdata('hollow')."') = (select count(1) from orders where id_mask='".$this->session->userdata('hollow')."'),'added','waiting')) as total_redeemed from goals g join segment_goals sg on g.id = sg.goal where active=1 and curdate() between active_from_date and active_to_date and step = {$seekStep} and segment= {$seekSegment}";
			$queryWeeks = $this->db->query($sql);
			if ($queryWeeks->num_rows() > 0)
				{
				   $thisWeek = $queryWeeks->row();
				   $goalNeeded = $queryWeeks->row();  
				}
			
			#var_dump($itemsCatalog);
			#die;
			$data['current'] = $goalNeeded->climb;
			$data['metas'] = $this->load->view('blocks/metas', $sortWeeks, TRUE);
			$data['catalogo'] = $this->load->view('blocks/catalog', $itemsCatalog, true);
			$data['historial'] = $this->load->view('blocks/historial', $itemsCatalog, true);
			$data['supermodals'] = $this->load->view('supermodals', $itemsCatalog, true);
			$data['footer'] = $this->load->view('partials/footer', NULL, TRUE);
			$dataFooter['modal_infor'] = $this->load->view('modals/modal-informacion', null, TRUE);
			$dataFooter['modal_pregu'] = $this->load->view('modals/modal-preguntas', null, TRUE);
			$dataFooter['modal_termin'] = $this->load->view('modals/modal-terminos', null, TRUE);
			$data['footer'] = $this->load->view('partials/footer', $dataFooter, TRUE);
			$data['actual_week'] = $thisWeek;
	 		
			$this->load->view('home',$data);
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
			   redirect('home');
			}
			
			
		}
	}


	public function goodBye()
	{
		#$this->session;
		$this->session->sess_destroy();
			redirect('preInit');
	
	}
	
}
