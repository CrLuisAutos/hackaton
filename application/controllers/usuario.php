<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	
	public function index()
	{
		$this->load->view('users/registro.php');

	}
	public function registrar()
	{

		$contrasena= $this->input->post('contrasena');
		$nombre= $this->input->post('nombre');
		$apellido= $this->input->post('apellido');
		$instrumento= $this->input->post('instrumento');
		$genero= $this->input->post('genero');
		$foto= $this->input->post('foto');
		$direccion= $this->input->post('direccion');
		//dejo el email por fuera, ya que puede poseer caracteres especiales
		$usuario = array('nombre' => $nombre, 'apellido' => $apellido,'contrasena' => $contrasena, 'genero' => $genero, 'foto' => $foto, 'direccion' => $direccion);
		 	
		 	$r=$this->User_model->save($usuario);
		 	if(sizeof($r)>0){
		 		redirect(base_url());
		 	}
		
	}
	/*
	FUNCION PARA REALIZAR EL LOGIN
	public function autenticarse()
	{

		$user = $this->input->post('nombre');
		$pass = $this->input->post('contrasena');

		$r = $this->user_model->autenticarse($user, $pass);
		if (sizeof($r) > 0) {
			$name = $r[0]->first_name;
			echo "Hello $name";
		}else
		{
			echo "Not valid user";
		}
	}
	*/
	
}

