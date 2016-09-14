<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "futbolista".
 *
 * @property integer $id_futbolista
 * @property string $nombre_futbolista
 * @property integer $edad
 * @property integer $id_equipo
 *
 * @property Equipo $idEquipo
 */
class Futbolista extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'futbolista';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_futbolista', 'nombre_futbolista'], 'required'],
            [['id_futbolista', 'edad', 'id_equipo'], 'integer'],
            [['nombre_futbolista'], 'string', 'max' => 255],
            [['id_equipo'], 'exist', 'skipOnError' => true, 'targetClass' => Equipo::className(), 'targetAttribute' => ['id_equipo' => 'id_equipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_futbolista' => 'Id Futbolista',
            'nombre_futbolista' => 'Nombre Futbolista',
            'edad' => 'Edad',
            'id_equipo' => 'Id Equipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEquipo()
    {
        return $this->hasOne(Equipo::className(), ['id_equipo' => 'id_equipo']);
    }
}
