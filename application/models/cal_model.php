<?php 
class Cal_model extends CI_Model{
    public function send_calc_data($string){
		$data = [
			'searches' => $string
		];
		$this->db->insert('previous-searches', $data);
	}
}
