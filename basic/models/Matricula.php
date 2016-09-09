<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matricula".
 *
 * @property string $idmatricula
 * @property string $year
 *
 * @property Automovil[] $automovils
 */
class Matricula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matricula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmatricula'], 'required'],
            [['year'], 'safe'],
            [['idmatricula'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idmatricula' => 'Idmatricula',
            'year' => 'Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutomovils()
    {
        return $this->hasMany(Automovil::className(), ['matricula_idmatricula' => 'idmatricula']);
    }
}
