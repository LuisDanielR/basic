<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Futbolista;

/**
 * FutbolistaSearch represents the model behind the search form about `app\models\Futbolista`.
 */
class FutbolistaSearch extends Futbolista
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id_futbolista', 'edad', 'fk_id_equipo'], 'integer'],
            [['id_futbolista', 'edad'], 'integer'],
            //[['nombre_futbolista'], 'safe'],
            [['nombre_futbolista','fk_id_equipo'], 'safe'],
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
        $query = Futbolista::find();

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
        
        $query->joinWith('fkIdEquipo'); //Se agrego esta linea para la busqueda
        
        // grid filtering conditions
        $query->andFilterWhere([
            'id_futbolista' => $this->id_futbolista,
            'edad' => $this->edad,
            //'fk_id_equipo' => $this->fk_id_equipo, Se quito esta linea
        ]);

        $query->andFilterWhere(['like', 'nombre_futbolista', $this->nombre_futbolista])
                ->andFilterWhere(['like', 'equipo.nombre_equipo', $this->fk_id_equipo]); 
            //se agrega el atributo con relacion a la tabla

        return $dataProvider;
    }
}
