<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class docentes extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Docentes_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosDocentes']=$this->Docentes_model->getDocentes();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Docentes/tblDocentes', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Docentes/registroDocentes');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Docentes_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'ApellidoP'=>$_POST['apellidop'],
					'ApellidoM'=>$_POST['apellidom'],
					'Matricula'=>$_POST['matricula'],
					'GrupoA'=>$_POST['grupoa'],
	                'Especialidad'=>$_POST['especialidad'], 
					'Correo'=>$_POST['correo'],
					'Telefono'=>$_POST['telefono']
	                );
		if ($this->Docentes_model->insertDocentes($data)){
			redirect('Docentes/index');
		}
	}

	function delete($idDocente){
		//cargar el modelo
		$this->load->model('Docentes_model');
		//cargar la funcion
		$this->Docentes_model->delete($idDocente);
		redirect('Docentes/index');
	}


	function findone($idDocente){
		//cargar modelo
		$this->load->model('Docentes_model');
		//cargar la función
		$data['docentesolito']=$this->Docentes_model->get_one_Docentes($idDocente);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Docentes/editarDocentes',$data);
		$this->load->view('layout/footer');
	} 

	function updateDocentes($idDocente){
		$this->load->model('Docentes_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'ApellidoP'=>$_POST['apellidop'],
					'ApellidoM'=>$_POST['apellidom'],
					'Matricula'=>$_POST['matricula'],
					'GrupoA'=>$_POST['grupoa'],
	                'Especialidad'=>$_POST['especialidad'],
					'Correo'=>$_POST['correo'],
					'Telefono'=>$_POST['telefono']
	                );
		if ($this->Docentes_model->update($idDocente,$data))
			redirect('Docentes/index');
	}
}