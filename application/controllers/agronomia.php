<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class agronomia extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Agronomia_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosAgronomia']=$this->Agronomia_model->getAgronomia();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Agronomia/tblAgronomia', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Agronomia/registroAgronomia');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Agronomia_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'ApellidoP'=>$_POST['apellidop'],
					'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Materia1'=>$_POST['materia1'],
					'Materia2'=>$_POST['materia2']
	                );
		if ($this->Agronomia_model->insertAgronomia($data)){
			redirect('Agronomia/index');
		}
	}

	function delete($idAgro){
		//cargar el modelo
		$this->load->model('Agronomia_model');
		//cargar la funcion
		$this->Agronomia_model->delete($idAgro);
		redirect('Agronomia/index');
	}


	function findone($idAgro){
		//cargar modelo
		$this->load->model('Agronomia_model');
		//cargar la función
		$data['agronomiasolito']=$this->Agronomia_model->get_one_Agronomia($idAgro);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Agronomia/editarAgronomia',$data);
		$this->load->view('layout/footer');
	} 

	function updateAgronomia($idAgro){
		$this->load->model('Agronomia_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'ApellidoP'=>$_POST['apellidop'],
					'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Materia1'=>$_POST['materia1'],
					'Materia2'=>$_POST['materia2']
	                );
		if ($this->Agronomia_model->update($idAgro,$data))
			redirect('Agronomia/index');
	}
}