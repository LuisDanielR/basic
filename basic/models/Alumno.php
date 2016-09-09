<?php
	namespace app\models;
	use yii\base\Model;

	class Alumno extends Model {

		public $nombre;
		public $control;
		public $telefono;
		public $correo;			

		public function rules(){
			return [ 
					[['nombre', 'control'],'required'],['telefono','number'], ['correo','email']
					];	
		}		

	}

?>