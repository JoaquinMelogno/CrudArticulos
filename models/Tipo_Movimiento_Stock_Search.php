<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Articulos;


class Tipo_Movimiento_Stock_Search extends Tipo_Movimiento_Stock
{


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre'],'string','max'=>100],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Proveedores::find();

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

        $query->select(['id', 'nombre'])
            ->from('wk_tipo_movimiento_stock');

        

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'nombre', $this->nombre]);

        $dataProvider->pagination = ['pageSize' => 100];

        return $dataProvider;
    }
}
