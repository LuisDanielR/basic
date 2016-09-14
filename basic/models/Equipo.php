<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo".
 *
 * @property integer $id_equipo
 * @property string $nombre_equipo
 *
 * @property Futbolista[] $futbolistas
 */
class Equipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_equipo'], 'required'],
            [['nombre_equipo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_equipo' => 'Id Equipo',
            'nombre_equipo' => 'Nombre Equipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFutbolistas()
    {
        return $this->hasMany(Futbolista::className(), ['fk_id_equipo' => 'id_equipo']);
    }
}
