<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumno;

/**
 * AlumnoSearch represents the model behind the search form about `app\models\Alumno`.
 */
class AlumnoSearch extends Alumno
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['id_alumno', 'fk_id_materia'], 'integer'],
            [['id_alumno'], 'integer'],
            //[['nombre_alumno', 'numero_control'], 'safe'],
            [['nombre_alumno', 'numero_control', 'fk_id_materia'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Alumno::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('fkIdMateria');
        
        // grid filtering conditions
        $query->andFilterWhere([
            'id_alumno' => $this->id_alumno,
           // 'fk_id_materia' => $this->fk_id_materia,
        ]);

        $query->andFilterWhere(['like', 'nombre_alumno', $this->nombre_alumno])
            ->andFilterWhere(['like', 'numero_control', $this->numero_control])
            ->andFilterWhere(['like', 'materia.nombre_materia', $this->fk_id_materia]);

        return $dataProvider;
    }
}
