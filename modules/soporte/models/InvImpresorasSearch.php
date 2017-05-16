<?php

namespace app\modules\soporte\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\soporte\models\InvImpresoras;

/**
 * InvImpresorasSearch represents the model behind the search form about `app\modules\soporte\models\InvImpresoras`.
 */
class InvImpresorasSearch extends InvImpresoras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'progresivo', 'id_tipo', 'marca', 'modelo', 'estado', 'id_plantel', 'id_area', 'id_piso', 'clasif', 'created_by', 'updated_by'], 'integer'],
            [['serie', 'observaciones', 'created_at', 'updated_at'], 'safe'],
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
        $query = InvImpresoras::find();

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
            'progresivo' => $this->progresivo,
            'id_tipo' => $this->id_tipo,
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'estado' => $this->estado,
            'id_plantel' => $this->id_plantel,
            'id_area' => $this->id_area,
            'id_piso' => $this->id_piso,
            'clasif' => $this->clasif,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'serie', $this->serie])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
