<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class danza extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Danza_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosDanza']=$this->Danza_model->getDanza();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Danza/tblDanza', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Danza/registroDanza');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Danza_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Danza_model->insertDanza($data)){
			redirect('Danza/index');
		}
	}

	function delete($idDanza){
		//cargar el modelo
		$this->load->model('Danza_model');
		//cargar la funcion
		$this->Danza_model->delete($idDanza);
		redirect('Danza/index');
	}


	function findone($idDanza){
		//cargar modelo
		$this->load->model('Danza_model');
		//cargar la función
		$data['danzasolito']=$this->Danza_model->get_one_Danza($idDanza);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Danza/editarDanza',$data);
		$this->load->view('layout/footer');
	} 

	function updateDanza($idDanza){
		$this->load->model('Danza_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Danza_model->update($idDanza,$data))
			redirect('Danza/index');
	}
}