<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuestionario".
 *
 * @property integer $id
 * @property string $respuesta1
 * @property string $respuesta2
 * @property string $respuesta3
 * @property string $respuesta4
 * @property string $respuesta5
 */
class Cuestionario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuestionario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['respuesta1', 'respuesta2', 'respuesta3', 'respuesta4', 'respuesta5'], 'required'],
            [['respuesta1', 'respuesta2', 'respuesta3', 'respuesta4', 'respuesta5'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'respuesta1' => 'Respuesta1',
            'respuesta2' => 'Respuesta2',
            'respuesta3' => 'Respuesta3',
            'respuesta4' => 'Respuesta4',
            'respuesta5' => 'Respuesta5',
        ];
    }
}
