<?php

namespace app\modules\soporte\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\soporte\models\InvTelecom;

/**
 * InvTelecomSearch represents the model behind the search form about `app\modules\soporte\models\InvTelecom`.
 */
class InvTelecomSearch extends InvTelecom
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_equipo',  'estado', 'id_plantel', 'created_by', 'updated_by'], 'integer'],
            [['ip', 'mac', 'proxy', 'observaciones', 'created_at', 'updated_at'], 'safe'],
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
        $query = InvTelecom::find();

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
        $id_p = Yii::$app->user->identity->id_plantel;
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_equipo' => $this->id_equipo,
            'estado' => $this->estado,
            'id_plantel' => $id_p,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'mac', $this->mac])
            ->andFilterWhere(['like', 'proxy', $this->proxy])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
