<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\System;

/**
 * SystemSearch represents the model behind the search form about `common\models\System`.
 */
class SystemSearch extends System
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['webname', 'weburl', 'sitelogo', 'keywords', 'description', 'icp', 'addr', 'tel', 'count', 'introduction'], 'safe'],
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
        $query = System::find();

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
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'webname', $this->webname])
            ->andFilterWhere(['like', 'weburl', $this->weburl])
            ->andFilterWhere(['like', 'sitelogo', $this->sitelogo])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'icp', $this->icp])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'count', $this->count])
            ->andFilterWhere(['like', 'introduction', $this->introduction]);

        return $dataProvider;
    }
}
