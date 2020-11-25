<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Ticket_model extends CI_Model{
 
//----------------Menampilkan View Ticket Active----------------//

  function show_ticket(){

            $hasil=$this->db->query("SELECT * FROM ticket WHERE status_ticket='ACTIVE'");

            return $hasil;
      } 

//----------------Menampilkan View Ticket Closed----------------//

  function show_ticket_close(){

            $hasil=$this->db->query("SELECT * FROM ticket WHERE status_ticket='CLOSED'");

            return $hasil;
      } 
	  
//----------------Menampilkan View Ticket Pending----------------//

  function show_ticket_pending(){

            $hasil=$this->db->query("SELECT * FROM ticket WHERE status_kerja='PENDING'");

            return $hasil;
      }
	  
//----------------Menampilkan Ticket Yang Akan Di Close----------------//

  function show_close_ticket(){

            $hasil=$this->db->query("SELECT * FROM ticket WHERE status_ticket='ACTIVE' AND status_kerja='DONE' ");

            return $hasil;
      }
	  
//----------------Input Data----------------//
function input_data($data,$table){
	
            $this->db->insert($table,$data);
                }



//----------------Hapus Data----------------//	
 	function delete($t_id){
    $this->db->where('t_id', $t_id);
    $this->db->delete('ticket');
	
}

//----------------Update Data----------------//	
function edit_data($where,$table){                              
return $this->db->get_where($table,$where);

}
function update_data($where,$data,$table){
 $this->db->where($where);
$this->db->update($table,$data);

                }    


//----------------Close Ticket----------------//	
function close_data($where,$table){                              
return $this->db->get_where($table,$where);

}
function closed_data($where,$data,$table){
 $this->db->where($where);
$this->db->update($table,$data);

                }  				

}
