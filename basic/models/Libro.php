<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libro".
 *
 * @property integer $id_libro
 * @property string $nombre_libro
 *
 * @property Autor[] $autors
 */
class Libro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'libro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_libro'], 'required'],
            [['nombre_libro'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_libro' => 'Id Libro',
            'nombre_libro' => 'Nombre Libro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutors()
    {
        return $this->hasMany(Autor::className(), ['fk_id_libro' => 'id_libro']);
    }
}
