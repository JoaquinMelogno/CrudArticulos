<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
/**
 * This is the model class for table "libros".
 *
 * @property int $id
 * @property string $titulo
 * @property string $imagen
 */
class Articulos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wk_articulos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo','nombre','stock'], 'required'],
            [['codigo','nombre', 'rubro','stock','proveedor'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo' => 'Codigo',
            'cliente' => 'Cliente',
        ];
    }
}
