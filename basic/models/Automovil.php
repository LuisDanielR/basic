<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "automovil".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $modelo
 * @property string $marca
 * @property string $matricula_idmatricula
 *
 * @property Matricula $matriculaIdmatricula
 */
class Automovil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'automovil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'matricula_idmatricula'], 'required'],
            [['id'], 'integer'],
            [['nombre', 'modelo', 'marca'], 'string', 'max' => 45],
            [['matricula_idmatricula'], 'string', 'max' => 10],
            [['matricula_idmatricula'], 'exist', 'skipOnError' => true, 'targetClass' => Matricula::className(), 'targetAttribute' => ['matricula_idmatricula' => 'idmatricula']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'modelo' => 'Modelo',
            'marca' => 'Marca',
            'matricula_idmatricula' => 'Matricula Idmatricula',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatriculaIdmatricula()
    {
        return $this->hasOne(Matricula::className(), ['idmatricula' => 'matricula_idmatricula']);
    }
}
