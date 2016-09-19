<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pelicula;

/**
 * PeliculaSearch represents the model behind the search form about `app\models\Pelicula`.
 */
class PeliculaSearch extends Pelicula
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['id_pelicula', 'fk_id_genero'], 'integer'],
             [['id_pelicula'], 'integer'],
            [['nombre_pelicula','fk_id_genero'], 'safe'],
            [['duracion'], 'number'],
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
        $query = Pelicula::find();

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

        $query->joinWith('fkIdGenero');
        // grid filtering conditions
        $query->andFilterWhere([
            'id_pelicula' => $this->id_pelicula,
            'duracion' => $this->duracion,
            //'fk_id_genero' => $this->fk_id_genero,
        ]);

        $query->andFilterWhere(['like', 'nombre_pelicula', $this->nombre_pelicula])
                ->andFilterWhere(['like', 'genero.nombre_genero', $this->fk_id_genero]);

        return $dataProvider;
    }
}
