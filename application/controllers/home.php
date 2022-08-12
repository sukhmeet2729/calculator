<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $this->load->view('home');
    }
	public function calc(){
		$op_string = $this->input->post('old');
		try {
			$value = eval("return ($op_string);");
			$string = $op_string . ' = ' . $value . ' Created on - '. date('F j, Y h:i a');
			$this->cal_model->send_calc_data($string);
			echo $value;
		}
		catch (ParseError | DivisionByZeroError $e) {
			echo $e->getMessage();
		}
	}
}
?>
