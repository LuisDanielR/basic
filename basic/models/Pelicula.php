<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelicula".
 *
 * @property integer $id_pelicula
 * @property string $nombre_pelicula
 * @property double $duracion
 * @property integer $fk_id_genero
 *
 * @property Genero $fkIdGenero
 */
class Pelicula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelicula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_pelicula', 'duracion'], 'required'],
            [['duracion'], 'number'],
            [['fk_id_genero'], 'integer'],
            [['nombre_pelicula'], 'string', 'max' => 255],
            [['fk_id_genero'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['fk_id_genero' => 'id_genero']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pelicula' => 'Id Pelicula',
            'nombre_pelicula' => 'Nombre Pelicula',
            'duracion' => 'Duracion',
            'fk_id_genero' => 'Fk Id Genero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdGenero()
    {
        return $this->hasOne(Genero::className(), ['id_genero' => 'fk_id_genero']);
    }
}
