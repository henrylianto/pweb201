<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

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
		$this->load->view('Daftar_Resep/list');
	}

  public function ayamgoreng()
	{
		$this->load->view('Daftar_Resep/ayamgoreng');
	}

  public function ayampanggangmerah()
	{
		$this->load->view('Daftar_Resep/ayampanggangmerah');
	}

  public function nasigorengsosis()
	{
		$this->load->view('Daftar_Resep/nasigorengsosis');
	}

  public function pallubasa()
	{
		$this->load->view('Daftar_Resep/pallubasa');
	}

  public function rawon()
	{
		$this->load->view('Daftar_Resep/rawon');
	}

  public function rendang()
	{
		$this->load->view('Daftar_Resep/rendang');
	}

  public function sambalpetaiudang()
	{
		$this->load->view('Daftar_Resep/sambalpetaiudang');
	}

  public function sotoayam()
	{
		$this->load->view('Daftar_Resep/sotoayam');
	}

  public function tahutempe()
	{
		$this->load->view('Daftar_Resep/tahutempe');
	}

  public function sateayam()
	{
		$this->load->view('Daftar_Resep/sateayam');
	}

  public function satelilit()
	{
		$this->load->view('Daftar_Resep/satelilit');
	}

}
