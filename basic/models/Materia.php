<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materia".
 *
 * @property integer $id_materia
 * @property string $nombre_materia
 *
 * @property Alumno[] $alumnos
 */
class Materia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_materia'], 'required'],
            [['nombre_materia'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_materia' => 'Id Materia',
            'nombre_materia' => 'Nombre Materia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumno::className(), ['fk_id_materia' => 'id_materia']);
    }
}
