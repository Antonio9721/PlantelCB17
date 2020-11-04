<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materias extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Materias_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosMaterias']=$this->Materias_model->getMaterias();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Materias/tblMaterias', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Materias/registroMaterias');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Materias_model');

		$data=array('Materia'=>$_POST['materia'],
	                'ClaveMat'=>$_POST['clavemat'],
	                'Semestre'=>$_POST['semestre'],
					'NombreDoc'=>$_POST['nombredoc'],
					'Apaterno'=>$_POST['apaterno'],
	                'Amaterno'=>$_POST['amaterno']
	      
	                );
		if ($this->Materias_model->insertMaterias($data)){
			redirect('Materias/index');
		}
	}

	function delete($idMateria){
		//cargar el modelo
		$this->load->model('Materias_model');
		//cargar la funcion
		$this->Materias_model->delete($idMateria);
		redirect('Materias/index');
	}


	function findone($idMateria){
		//cargar modelo
		$this->load->model('Materias_model');
		//cargar la función
		$data['materiasolito']=$this->Materias_model->get_one_Materias($idMateria);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Materias/editarMaterias',$data);
		$this->load->view('layout/footer');
	} 

	function updateMaterias($idMateria){
		$this->load->model('Materias_model');
		$data=array('Materia'=>$_POST['materia'],
	                'ClaveMat'=>$_POST['clavemat'],
	                'Semestre'=>$_POST['semestre'],
					'NombreDoc'=>$_POST['nombredoc'],
					'Apaterno'=>$_POST['apaterno'],
	                'Amaterno'=>$_POST['amaterno']
	           
	                );
		if ($this->Materias_model->update($idMateria,$data))
			redirect('Materias/index');
	}
}