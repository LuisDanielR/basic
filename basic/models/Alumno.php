<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumno".
 *
 * @property integer $id_alumno
 * @property string $nombre_alumno
 * @property string $numero_control
 * @property integer $fk_id_materia
 *
 * @property Materia $fkIdMateria
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_alumno', 'numero_control'], 'required'],
            [['fk_id_materia'], 'integer'],
            [['nombre_alumno', 'numero_control'], 'string', 'max' => 255],
            [['fk_id_materia'], 'exist', 'skipOnError' => true, 'targetClass' => Materia::className(), 'targetAttribute' => ['fk_id_materia' => 'id_materia']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Id Alumno',
            'nombre_alumno' => 'Nombre Alumno',
            'numero_control' => 'Numero Control',
            'fk_id_materia' => 'Fk Id Materia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdMateria()
    {
        return $this->hasOne(Materia::className(), ['id_materia' => 'fk_id_materia']);
    }
}
