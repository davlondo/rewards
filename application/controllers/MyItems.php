<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyItems extends CI_Controller {

	public function index()
	{
		
	}

	
	public function myBrandItem()
	{
		if(null ===$this->session->userdata('bnr_ss')){
			redirect('first');
		}else{
			#$form = $this->input->post();

	 		$mini_data['name']=$this->session->userdata('full');
	 		$item_sku = $this->uri->segment(3);
	 		$this->load->database();

	 		#$sqlOrder = "INSERT into orders values(default,1,'".$this->session->userdata('hollow')."',1,now())";
			#$queryOrder = $this->db->query($sqlOrder);
			#$insert_id= $this->db-insert_id();
			$owner = $this->session->userdata('hollow');

			$post_data =array(  'item_id' => $item_sku, 'id_mask' => $owner, 'finished' => 1,'order_date' => date('Y-m-d H:i:s'));

			$this->db->insert('orders', $post_data);
   			$insert_id = $this->db->insert_id();

   			

	 		$sql = "INSERT into customer_info values(default,'".$this->session->userdata('hollow')."','".$this->input->post('address')."',{$this->input->post('fijo')},'".$this->input->post('district')."','".$this->input->post('mobile')."','".$this->input->post('Email1')."','".date('Y-m-d H:i:s')."', $insert_id);";
			$queryOrder = $this->db->query($sql);

			
			if (!$queryOrder)
				{
				   $row = 'error'; 
				}else{
					$mini_data['name']=$this->session->userdata('full');
					$mini_data['firstName']=$this->session->userdata('first_name');
					$mini_data['middleName']=$this->session->userdata('middle_name');
					$mini_data['lastName']=$this->session->userdata('last_name');
					$mini_data['secLastName']=$this->session->userdata('sec_last_name');
			 		$item_sku = $this->uri->segment(3);
			 		$this->load->database();

			 		$sql = "SELECT g.id id,name,description as infor,image_url,available as qty from gifts g join inventory i on g.id = i.item_id where g.id=$item_sku and active=1;";
					$query = $this->db->query($sql);

					if ($query->num_rows() > 0)
						{
						   $row = $query->row(); 
						}else{
							$row= 'error';
						}
					#var_dump($this->uri);
					$itemDetails= $row;
					#var_dump($itemDetails);
					#die;
			 		#$mini_data['name']='Ana Romero';
			 		$data['item'] = $itemDetails;
			 		$data['return'] ='inventory';
			 		$data['redeem'] = $this->load->view('prize', null, TRUE);
			 		$data['header'] = $this->load->view('partials/header', $mini_data, TRUE);
			 		$dataFooter['modal_infor'] = $this->load->view('modals/modal-informacion', null, TRUE);
					$dataFooter['modal_pregu'] = $this->load->view('modals/modal-preguntas', null, TRUE);
					$dataFooter['modal_termin'] = $this->load->view('modals/modal-terminos', null, TRUE);
					$data['footer'] = $this->load->view('partials/footer', $dataFooter, TRUE);
					$this->load->view('gifts',$data);
				}



		}
	}



