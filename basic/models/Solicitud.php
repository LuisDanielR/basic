<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "solicitud".
 *
 * @property string $folio
 * @property string $solicitante
 * @property string $tipo
 * @property string $texto
 */
class Solicitud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['folio'], 'required'],
            [['folio', 'solicitante', 'tipo', 'texto'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'folio' => 'Folio',
            'solicitante' => 'Solicitante',
            'tipo' => 'Tipo',
            'texto' => 'Texto',
        ];
    }
}
