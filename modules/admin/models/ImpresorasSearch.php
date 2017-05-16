<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Impresoras;

/**
 * ImpresorasSearch represents the model behind the search form about `app\modules\admin\models\Impresoras`.
 */
class ImpresorasSearch extends Impresoras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'progresivo', 'id_modelo', 'id_marca', 'id_plantel', 'id_area', 'id_status', 'id_importancia', 'created_by', 'updated_by'], 'integer'],
            [['observaciones', 'created_at', 'updated_at'], 'safe'],
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
        $query = Impresoras::find();

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
            'id_modelo' => $this->id_modelo,
            'id_marca' => $this->id_marca,
            'id_plantel' => $this->id_plantel,
            'id_area' => $this->id_area,
            'id_status' => $this->id_status,
            'id_importancia' => $this->id_importancia,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
