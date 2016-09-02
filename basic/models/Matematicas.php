<?php
	namespace app\models;
	use yii\base\Model;

	class Matematicas extends Model {

		public $numero1;
		public $numero2;							

		public function rules(){
			return [ 
					[['numero1','numero2'],'required'],['numero1', 'integer','message'=>'El numero debe ser entero'], ['numero2','integer','message'=>'El numero debe ser entero']
					];	
		}

		public function suma(){
			return $this->numero1 + $this->numero2;
		}

		public function attributeLabels(){
			return [
				'numero1'=>'Dame el primer numero',
				'numero2'=>'Dame el segundo numero'
			];
		}
		

	}

?>