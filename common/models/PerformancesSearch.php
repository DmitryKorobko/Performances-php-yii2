<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Performances;

/**
 * PerformancesSearch represents the model behind the search form about `common\models\Performances`.
 */
class PerformancesSearch extends Performances
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['performance_id', 'artist_id', 'place_id'], 'integer'],
            [['performance_name', 'performance_date'], 'safe'],
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
        $query = Performances::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'performance_id' => $this->performance_id,
            'performance_date' => $this->performance_date,
            'artist_id' => $this->artist_id,
            'place_id' => $this->place_id,
        ]);

        $query->andFilterWhere(['like', 'performance_name', $this->performance_name]);

        return $dataProvider;
    }
}
