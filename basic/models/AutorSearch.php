<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Autor;

/**
 * AutorSearch represents the model behind the search form about `app\models\Autor`.
 */
class AutorSearch extends Autor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id_autor', 'edad', 'fk_id_libro'], 'integer'],
            [['id_autor', 'edad'], 'integer'],
            [['nombre_autor','fk_id_libro'], 'safe'],
  //          [['nombre_autor'], 'safe'],
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
        $query = Autor::find();

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
        $query->joinWith('fkIdLibro');
        // grid filtering conditions
        $query->andFilterWhere([
            'id_autor' => $this->id_autor,
            'edad' => $this->edad,
            //'fk_id_libro' => $this->fk_id_libro,
        ]);

        $query->andFilterWhere(['like', 'nombre_autor', $this->nombre_autor])
        ->andFilterWhere(['like', 'libro.nombre_libro', $this->fk_id_libro]);

        return $dataProvider;
    }
}
