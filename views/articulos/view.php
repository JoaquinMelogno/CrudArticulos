<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WkParametros */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wk articulos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wk-parametros-view">

<div class="col-md-12">
    <div class="card ">

        <div class="card-header card-header-primary card-header-icon">
            <h4 class="card-title">
                <?= Yii::t('app', 'View') ?>
                <div class="pull-right">
                    <?= Html::a('<b class="material-icons">keyboard_arrow_left</b>', ['index'], ['class' => 'btn btn-xs btn-success btn-round btn-fab','rel'=>'tooltip', 'data-placement'=>'bottom', 'data-original-title'=>Yii::t('app', 'Back')]) ?>
                    <?= Html::a('<b class="material-icons">create</b>', ['update', 'id' => $model->id], ['class' => 'btn btn-xs btn-success btn-round btn-fab','rel'=>'tooltip', 'data-placement'=>'bottom', 'data-original-title'=>Yii::t('app', 'Edit')]) ?>
                    <?= Html::a('<b class="material-icons">content_copy</b>', ['clone', 'id' => $model->id], ['class' => 'btn btn-xs btn-primary btn-round btn-fab','rel'=>'tooltip', 'data-placement'=>'bottom', 'data-original-title'=>Yii::t('app', 'Clone')]) ?>
                    <?= Html::a('<b class="material-icons">delete</b>', ['delete', 'id' => $model->id], ['class' => 'btn btn-xs btn-danger btn-round btn-fab','rel'=>'tooltip', 'data-placement'=>'bottom', 'data-original-title'=>Yii::t('app', 'Delete'),'data' => [
                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
            </h4>
        </div>

        <div class="card-body">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cliente',
            'codigo',
            'rubro',
        ],
    ]) ?>

        </div>

        <div class="card-footer ml-auto mr-auto">
        </div>

    </div>
</div>
</div>
