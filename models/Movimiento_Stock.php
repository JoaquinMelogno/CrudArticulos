<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


class Movimiento_Stock extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'wk_movimientos_stock';
    }


    public function rules()
    {
        return [
            [['id','fecha','tipo','cliente','articulo'], 'required'],
            [['mail'], 'string', 'max' => 100],
            [['cantidad','integer']]
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'articulo' => 'Nombre',
            'fecha' => 'Fecha',
        ];
    }
}
