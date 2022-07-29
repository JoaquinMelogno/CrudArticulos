<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WkParametros */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Articulos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wk-articulos-create">

    <div class="card ">
        <div class="card-header card-header-primary card-header-icon">
            <h4 class="card-title">
                <?= Html::encode($this->title) ?>
                <div class="pull-right">
                    <?= Html::a('<b class="material-icons">keyboard_arrow_left</b>', ['index'], ['class' => 'btn btn-xs btn-primary btn-round btn-fab','rel'=>'tooltip', 'data-placement'=>'bottom', 'data-original-title'=>Yii::t('app', 'Back')]) ?>
                </div>
            </h4>
        </div>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
            
    </div>
</div>



