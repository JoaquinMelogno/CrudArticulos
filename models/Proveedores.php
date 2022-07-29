<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Articulos;
/**
 * This is the model class for table "libros".
 *
 * @property int $id
 * @property string $titulo
 * @property string $imagen
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wk_proveedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','nombre'], 'required'],
            [['mail','nombre'], 'string', 'max' => 100],
            [['telefono'], 'string', 'max'=>20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Codigo',
            'mail' => 'Correo',
        ];
    }
}
