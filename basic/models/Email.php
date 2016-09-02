<?php

namespace app\models;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "email".
 *
 * @property integer $id
 * @property string $asunto
 * @property string $origen
 * @property string $destino
 * @property string $texto
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['asunto', 'origen', 'destino'], 'string', 'max' => 52],
            [['texto'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'asunto' => 'Asunto',
            'origen' => 'Origen',
            'destino' => 'Destino',
            'texto' => 'Texto',
        ];
    }
}
