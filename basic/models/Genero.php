<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "genero".
 *
 * @property integer $id_genero
 * @property string $nombre_genero
 *
 * @property Pelicula[] $peliculas
 */
class Genero extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genero';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_genero'], 'required'],
            [['nombre_genero'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_genero' => 'Id Genero',
            'nombre_genero' => 'Nombre Genero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculas()
    {
        return $this->hasMany(Pelicula::className(), ['fk_id_genero' => 'id_genero']);
    }
}
