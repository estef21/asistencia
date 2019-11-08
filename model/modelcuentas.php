<?php 

class modelcuentas
{
	public $nick;
	public $clave;

	private $id;
	private $conexionDB;

	function__construct()
	{
		include "../setting/DB.php";
		$conexion=new DB();
		$this->conexionDB = $conexion->conexion;
		
	}

	function crear(){}//guardar o registrar nuevos susuarios

	function modifyPassword(){}//cambiar clave

	function verificarCampo(){}//verifica la existencia de un dato

	function iniciarsesion(){}//verifica que el usuario y clave sean correctos

	function getID($user){}

	function getUser($id){}

}




 ?>