<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "futbolista".
 *
 * @property integer $id_futbolista
 * @property string $nombre_futbolista
 * @property integer $edad
 * @property integer $fk_id_equipo
 *
 * @property Equipo $fkIdEquipo
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
            [['nombre_futbolista'], 'required'],
            [['edad', 'fk_id_equipo'], 'integer'],
            [['nombre_futbolista'], 'string', 'max' => 255],
            [['fk_id_equipo'], 'exist', 'skipOnError' => true, 'targetClass' => Equipo::className(), 'targetAttribute' => ['fk_id_equipo' => 'id_equipo']],
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
            'fk_id_equipo' => 'Fk Id Equipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdEquipo()
    {
        return $this->hasOne(Equipo::className(), ['id_equipo' => 'fk_id_equipo']);
    }
}
