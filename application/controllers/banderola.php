<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class banderola extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Banderola_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosBanderola']=$this->Banderola_model->getBanderola();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Banderola/tblBanderola', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Banderola/registroBanderola');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Banderola_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Banderola_model->insertBanderola($data)){
			redirect('Banderola/index');
		}
	}

	function delete($idBanderola){
		//cargar el modelo
		$this->load->model('Banderola_model');
		//cargar la funcion
		$this->Banda_model->delete($idBanderola);
		redirect('Banderola/index');
	}


	function findone($idBanderola){
		//cargar modelo
		$this->load->model('Banderola_model');
		//cargar la función
		$data['banderolasolito']=$this->Banderola_model->get_one_Banderola($idBanderola);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Banderola/editarBanderola',$data);
		$this->load->view('layout/footer');
	} 

	function updateBanderola($idBanderola){
		$this->load->model('Banderola_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Banderola_model->update($idBanderola,$data))
			redirect('Banderola/index');
	}
}