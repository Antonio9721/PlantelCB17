<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class banda extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Banda_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosBanda']=$this->Banda_model->getBanda();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Banda/tblBanda', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Banda/registroBanda');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Banda_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Banda_model->insertBanda($data)){
			redirect('Banda/index');
		}
	}

	function delete($idBanda){
		//cargar el modelo
		$this->load->model('Banda_model');
		//cargar la funcion
		$this->Banda_model->delete($idBanda);
		redirect('Banda/index');
	}


	function findone($idBanda){
		//cargar modelo
		$this->load->model('Banda_model');
		//cargar la función
		$data['bandasolito']=$this->Banda_model->get_one_Banda($idBanda);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Banda/editarBanda',$data);
		$this->load->view('layout/footer');
	} 

	function updateBanda($idBanda){
		$this->load->model('Banda_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Banda_model->update($idBanda,$data))
			redirect('Banda/index');
	}
}