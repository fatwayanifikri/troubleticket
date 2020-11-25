<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Ticket extends CI_Controller{
  function __construct(){
    parent::__construct();
  $this->load->model('Ticket_model');

      }
 
//----------------Redirect Halaman Home Costumer Service----------------//
	   public function index()
	{
        $this->load->view('_partials/header');
        $this->load->view('_partials/nav');
        $this->load->view('home_cc');
        $this->load->view('_partials/footer');
    }
 
 
//----------------Redirect Halaman View Ticket Active----------------//
     function view(){
            $this->load->view('_partials/header');
			$this->load->view('_partials/nav_without_welcome');
            $x['data']=$this->Ticket_model->show_ticket();
            $this->load->view('ticket_view_active',$x);
			$this->load->view('_partials/footer');
      }
	  
//----------------Redirect Halaman View Ticket Yg Sudah Closed----------------//
     function view_close(){
            $this->load->view('_partials/header');
			$this->load->view('_partials/nav_without_welcome');
            $x['data']=$this->Ticket_model->show_ticket_close();
            $this->load->view('ticket_view_close',$x);
			$this->load->view('_partials/footer');
      }	  
	  
//----------------Redirect Halaman View Ticket Pending----------------//
     function view_pending(){
            $this->load->view('_partials/header');
			$this->load->view('_partials/nav_without_welcome');
            $x['data']=$this->Ticket_model->show_ticket_pending();
            $this->load->view('ticket_view_pending',$x);
			$this->load->view('_partials/footer');
      }	

//----------------Redirect Halaman Close Ticket----------------//
     function close_ticket(){
            $this->load->view('_partials/header');
			$this->load->view('_partials/nav_without_welcome');
            $x['data']=$this->Ticket_model->show_close_ticket();
            $this->load->view('ticket_close',$x);
			$this->load->view('_partials/footer');
      }	
	  
//----------------Input Data----------------//
	  
function tambah(){
$this->load->view('_partials/header');
$this->load->view('_partials/nav_without_welcome');
$this->load->view('ticket_add_new');
$this->load->view('_partials/footer');
}
function tambah_aksi(){

$t_id = $this->input->post('t_id');
$t_number = $this->input->post('ticket_number');
$severity = $this->input->post('severity');
$tgl_input = $this->input->post('tgl_input_ticket');
$nm_site = $this->input->post('nama_site');
$status_ticket = $this->input->post('status_ticket');
$alarm = $this->input->post('alarm');
$suspect = $this->input->post('suspect');
$location = $this->input->post('location');

$data = array(
'ticket_number' => $t_number,
'severity' => $severity,
'tgl_input_ticket' => $tgl_input,
'nama_site' => $nm_site,
'status_ticket' => $status_ticket,
'alarm' => $alarm,
'suspect' => $suspect,
'location' => $location

);
$this->Ticket_model->input_data($data,'ticket');
redirect('ticket/view');

}

//----------------Hapus Data----------------//
	function delete(){
    $t_id = $this->uri->segment(3);
    $this->Ticket_model->delete($t_id);
    redirect('Ticket/view');
}


//----------------Edit Data----------------//
function edit($t_id){
	$this->load->view('_partials/header');
	$this->load->view('_partials/nav_without_welcome');
$where = array('t_id' => $t_id);
$data['ticket'] = $this->Ticket_model->edit_data($where,'ticket')->result();
$this->load->view('ticket_update_active',$data);
$this->load->view('_partials/footer');
}

function update(){
$t_id = $this->input->post('t_id');
$t_number = $this->input->post('ticket_number');
$severity = $this->input->post('severity');
$tgl_input = $this->input->post('tgl_input_ticket');
$nm_site = $this->input->post('nama_site');
$status_ticket = $this->input->post('status_ticket');
$alarm = $this->input->post('alarm');
$suspect = $this->input->post('suspect');
$location = $this->input->post('location');


$data = array(
'ticket_number' => $t_number,
'severity' => $severity,
'tgl_input_ticket' => $tgl_input,
'nama_site' => $nm_site,
'status_ticket' => $status_ticket,
'alarm' => $alarm,
'suspect' => $suspect,
'location' => $location
);

$where = array(
't_id' => $t_id
);
$this->Ticket_model->update_data($where,$data,'ticket');
redirect('Ticket/view');
}

//----------------Close Data----------------//
function close($t_id){
	$this->load->view('_partials/header');
	$this->load->view('_partials/nav_without_welcome');
$where = array('t_id' => $t_id);
$data['ticket'] = $this->Ticket_model->close_data($where,'ticket')->result();
$this->load->view('ticket_update_close',$data);
$this->load->view('_partials/footer');
}

function closed(){
$t_id = $this->input->post('t_id');
$t_number = $this->input->post('ticket_number');
$severity = $this->input->post('severity');
$tgl_input = $this->input->post('tgl_input_ticket');
$nm_site = $this->input->post('nama_site');
$status_ticket = $this->input->post('status_ticket');
$alarm = $this->input->post('alarm');
$suspect = $this->input->post('suspect');
$location = $this->input->post('location');
$tgl_close = $this->input->post('tgl_close_ticket');

$data = array(
'ticket_number' => $t_number,
'severity' => $severity,
'tgl_input_ticket' => $tgl_input,
'nama_site' => $nm_site,
'status_ticket' => $status_ticket,
'alarm' => $alarm,
'suspect' => $suspect,
'location' => $location,
'tgl_close_ticket' => $tgl_close
);

$where = array(
't_id' => $t_id
);
$this->Ticket_model->closed_data($where,$data,'ticket');
redirect('Ticket/view_close');
}
  
}



