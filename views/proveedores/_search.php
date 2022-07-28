<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WkParametrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wk-proveedores-search">

    

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">

        <div class="col-md-12">

            <div class='col-md-6'>
                <?= $form->field($model, 'nombre') ?>
            </div>

            <div class='col-md-6'>
                <?= $form->field($model, 'telefono') ?>
            </div>

            <div class='col-md-6'>
                <?= $form->field($model, 'mail') ?>
            </div>

        <?php // echo $form->field($model, 'create_date') ?>

        <?php // echo $form->field($model, 'create_uid') ?>

        <?php // echo $form->field($model, 'write_date') ?>

        <?php // echo $form->field($model, 'write_uid') ?>

        <?php // echo $form->field($model, 'tipo') ?>

        <?php // echo $form->field($model, 'ayuda') ?>

        <?php // echo $form->field($model, 'grupo') ?>

        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
