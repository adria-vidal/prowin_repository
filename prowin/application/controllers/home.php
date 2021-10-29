<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

function teams()
{
    $crud = new grocery_CRUD();
 
    $crud->set_table('teams')
        ->set_subject('equipos')
        ->columns('name','country_id')
        ->display_as('name','nombre')
        ->display_as('country_id','Pais');
 
  //  $crud->fields('customerName','contactLastName','phone','city','country','creditLimit');
   // $crud->required_fields('customerName','contactLastName');
  $crud->set_relation('country_id','countries','name');
    $output = $crud->render();
 
    $this->_example_output($output);
}
	//VISTAS
	public function index()
	{
		$result = $this->db->get('competitions');
		$data = array('consulta'=>$result);
		
		$this->load->view('index',$data);

		// $result2 = $this->db->get('partidos');
		// $data = array('consulta'=>$result2);


		$crud = new grocery_CRUD();
		$crud->set_table('partidos');
			$crud->columns('local_team_id','goles_local','goles_visit','visit_team_id');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('local_team_id','Equipo Local')
				 ->display_as('goles_local','Goles Local')
				 ->display_as('goles_visit','Goles Visitante')
				 ->display_as('visit_team_id','Equipo Visitante');
				 
			$crud->set_subject('Resultado');
			$crud->set_relation('local_team_id','teams','name');
			$crud->set_relation('visit_team_id','teams','name');
			
			$output = $crud->render();

			$this->_example_output($output);
	}

	public function estadisticas(){
		$this->load->view('estadisticas.php');
	}
	
	public function resultados(){
		$this->load->view('resultados.php');
	}

	public function estGoles(){
		$crud = new grocery_CRUD();

			$crud->set_table('teams');
			$crud->columns('name','country_id');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('name','Equipo')
				 ->display_as('country_id','Pais');
			$crud->set_subject('Equipos');
			
			$output = $crud->render();

			$this->_example_output($output);
		$this->load->view('est_goles.php');
		
	}

	public function estCorners(){
		$this->load->view('est_corners.php');
	}

	public function estTargetas(){
		$this->load->view('est_targetas.php');
	}
	//CRUD MANTENER BD
	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function competitions()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}
	

}
