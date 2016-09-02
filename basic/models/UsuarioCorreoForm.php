<?php
	namespace app\models;
	use yii\base\Model;

class UsuarioCorreoForm extends Model{
    //put your code here
    
    public $nombre;
    public $email;
    
    public function rules(){
        return [
                [['nombre','email'],'required'],
                ['email','email'],
        ];        	
    }
    
}
