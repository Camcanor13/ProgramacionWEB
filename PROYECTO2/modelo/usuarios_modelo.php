<?php 

	class usuarios_modelo{
		private $db;
		private $usuarios;

		public function __construct(){

			require_once("conectar.php");
			$this->db=conectar::conexion();
			$this->usuarios=array();

		}

		public function get_usuarios(){
			$consulta=$this->db->query("SELECT * FROM usuario");

			while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
				$this->usuarios[]=$filas;

			}
			return $this->usuarios;
		}
	}
 ?>