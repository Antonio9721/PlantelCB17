<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aspirantes extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Aspirantes_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosAspirantes']=$this->Aspirantes_model->getAspirantes();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Aspirantes/tblAspirantes', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Aspirantes/registroAspirantes');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Aspirantes_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'ApellidoP'=>$_POST['apellidop'],
					'ApellidoM'=>$_POST['apellidom'],
					'Curp'=>$_POST['curp'],
					'Nacimiento'=>$_POST['nacimiento'],
					'Ntelefono'=>$_POST['ntelefono'],
					'Correo'=>$_POST['correo'],
					'Carrera'=>$_POST['carrera'],
					'Paraescolar'=>$_POST['paraescolar'],
					'Secundaria'=>$_POST['secundaria'],
					'Dialecto'=>$_POST['dialecto'],
					'Discapacidad'=>$_POST['discapacidad'],
	                'Fecha'=>$_POST['fecha'],
					'Hora'=>$_POST['hora'],
					'Estado'=>$_POST['estado'],
					'Municipio'=>$_POST['municipio'],
					'Codigo'=>$_POST['codigo'],
					'Comunidad'=>$_POST['comunidad'],
					'Calle'=>$_POST['calle'],
					'NumeroE'=>$_POST['numeroe'],
					'NumeroI'=>$_POST['numeroi'],
					'NombreT'=>$_POST['nombret'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
					'Telefono'=>$_POST['telefono'],
					'Escolaridad'=>$_POST['escolaridad'],
					'Ocupacion'=>$_POST['ocupacion'],
					'Salario'=>$_POST['salario']
	                );
		if ($this->Aspirantes_model->insertAspirantes($data)){
			redirect('Aspirantes/index');
		}
	}

	function delete($idAspirante){
		//cargar el modelo
		$this->load->model('Aspirantes_model');
		//cargar la funcion
		$this->Aspirantes_model->delete($idAspirante);
		redirect('Aspirantes/index');
	}


	function findone($idAspirante){
		//cargar modelo
		$this->load->model('Aspirantes_model');
		//cargar la función
		$data['aspirantesolito']=$this->Aspirantes_model->get_one_Aspirantes($idAspirante);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Aspirantes/editarAspirantes',$data);
		$this->load->view('layout/footer');
	} 

	function updateAspirantes($idAspirante){
		$this->load->model('Aspirantes_model');
		$data=array('Nombre'=>$_POST['nombre'],
		'ApellidoP'=>$_POST['apellidop'],
		'ApellidoM'=>$_POST['apellidom'],
		'Curp'=>$_POST['curp'],
		'Nacimiento'=>$_POST['nacimiento'],
		'Ntelefono'=>$_POST['ntelefono'],
		'Correo'=>$_POST['correo'],
		'Carrera'=>$_POST['carrera'],
		'Paraescolar'=>$_POST['paraescolar'],
		'Secundaria'=>$_POST['secundaria'],
		'Dialecto'=>$_POST['dialecto'],
		'Discapacidad'=>$_POST['discapacidad'],
		'Fecha'=>$_POST['fecha'],
		'Hora'=>$_POST['hora'],
		'Estado'=>$_POST['estado'],
		'Municipio'=>$_POST['municipio'],
		'Codigo'=>$_POST['codigo'],
		'Comunidad'=>$_POST['comunidad'],
		'Calle'=>$_POST['calle'],
		'NumeroE'=>$_POST['numeroe'],
		'NumeroI'=>$_POST['numeroi'],
		'NombreT'=>$_POST['nombret'],
		'Apaterno'=>$_POST['apaterno'],
		'Amaterno'=>$_POST['amaterno'],
		'Telefono'=>$_POST['telefono'],
		'Escolaridad'=>$_POST['escolaridad'],
		'Ocupacion'=>$_POST['ocupacion'],
		'Salario'=>$_POST['salario']
	                );
		if ($this->Aspirantes_model->update($idAspirante,$data))
			redirect('Aspirantes/index');
	}
}