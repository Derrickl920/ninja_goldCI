<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Ninjagolds extends CI_Controller
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }


	public function page_load()
	{
		if($this->session->userdata('gold') == NULL)
		{
			$this->session->set_userdata('gold', 0);
		}
		$this->load->view('ninjagoldviews', array('gold_total'=> $this->session->userdata('gold')));
		if($this->session->userdata('activity_log') ==NULL)
		{
			$this->session->set_userdata('activity_log', '');
		}
		// $this->session->unset_userdata('gold');
		// $this->session->unset_userdata('activity_log');
	}
	public function add_activity($log)
	{
		$activity = '';
		$activity = $this->session->userdata('activity_log');
		$activity .= $log;
		$this->session->set_userdata('activity_log', $activity);
		
		// $this->load->view('ninjagoldviews', array('
		// 	activity'=> $this->session->userdata('activity_log')));
	}
	public function add_gold()
	{
		if($this->input->post('action')=='farm')
		{	
			$gold = $this->session->userdata('gold');
			$farm_gold = rand(10,20);
			$this->session->set_userdata('gold', $gold+$farm_gold);
			$log = "You added {$farm_gold} gold <br>";
			$this->add_activity($log);
			// echo $this->session->userdata('gold');
		}
		if($this->input->post('action')=='cave')
		{	
			$gold = $this->session->userdata('gold');
			$cave_gold = rand(5,10);
			$this->session->set_userdata('gold', $gold+$cave_gold);
			$log = "You added {$cave_gold} gold <br>";
			$this->add_activity($log);
			// echo $this->session->userdata('gold');
		}
		if($this->input->post('action')=='house')
		{	
			$gold = $this->session->userdata('gold');
			$house_gold = rand(2,5);
			$this->session->set_userdata('gold', $gold+$house_gold);
			$log = "You added {$house_gold} gold <br>";
			$this->add_activity($log);
			// echo $this->session->userdata('gold');
		}
		if($this->input->post('action')=='casino')
		{	
			$gold = $this->session->userdata('gold');
			$casino_gold = rand(-50,50);
			$this->session->set_userdata('gold', $gold+$casino_gold);
			$log = "You added {$casino_gold} gold <br>";
			$this->add_activity($log);
			// echo $this->session->userdata('gold');
		}
		redirect('page_load');
	}
}


 ?>