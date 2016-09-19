<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autor".
 *
 * @property integer $id_autor
 * @property string $nombre_autor
 * @property integer $edad
 * @property integer $fk_id_libro
 *
 * @property Libro $fkIdLibro
 */
class Autor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_autor', 'edad'], 'required'],
            [['edad', 'fk_id_libro'], 'integer'],
            [['nombre_autor'], 'string', 'max' => 255],
            [['fk_id_libro'], 'exist', 'skipOnError' => true, 'targetClass' => Libro::className(), 'targetAttribute' => ['fk_id_libro' => 'id_libro']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_autor' => 'Id Autor',
            'nombre_autor' => 'Nombre Autor',
            'edad' => 'Edad',
            'fk_id_libro' => 'Fk Id Libro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdLibro()
    {
        return $this->hasOne(Libro::className(), ['id_libro' => 'fk_id_libro']);
    }
}
