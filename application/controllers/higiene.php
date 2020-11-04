<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class higiene extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Higiene_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosHigiene']=$this->Higiene_model->getHigiene();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Higiene/tblHigiene', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Higiene/registroHigiene');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Higiene_model');

		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'MateriaP'=>$_POST['materiap'],
	                'MateriaS'=>$_POST['materias']
	                );
		if ($this->Higiene_model->insertHigiene($data)){
			redirect('Higiene/index');
		}
	}

	function delete($idHigiene){
		//cargar el modelo
		$this->load->model('Higiene_model');
		//cargar la funcion
		$this->Higiene_model->delete($idHigiene);
		redirect('Higiene/index');
	}


	function findone($idHigiene){
		//cargar modelo
		$this->load->model('Higiene_model');
		//cargar la función
		$data['higienesolito']=$this->Higiene_model->get_one_Higiene($idHigiene);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Higiene/editarHigiene',$data);
		$this->load->view('layout/footer');
	} 

	function updateHigiene($idHigiene){
		$this->load->model('Higiene_model');
		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'MateriaP'=>$_POST['materiap'],
	                'MateriaS'=>$_POST['materias']
	                );
		if ($this->Higiene_model->update($idHigiene,$data))
			redirect('Higiene/index');
	}
}