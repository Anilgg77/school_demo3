<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}

	function teachers(){
		$this->load->view('teachers');
	}

	function classes(){
		$this->load->view('classes');
	}

	function subjects(){
		$this->load->view('subjects');
	}
	
	function students(){
		$this->load->view('students');
	}

	function manage_attendance(){
		$this->load->view('manage_attendance');
	}

	function class_routines(){
		$this->load->view('class_routines');
	}

	function manage_exams(){
		$this->load->view('manage_exams');
	}

	function parents(){
		$this->load->view('parents');
	}

	function transportations(){
		$this->load->view('transportations');
	}

	function noticeboard(){
		$this->load->view('noticeboard');
	}

}
