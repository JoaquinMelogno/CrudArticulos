<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

  
<div class="card-body">

    <div class="row">

        <div class="col-md-12">

        <?php $form = ActiveForm::begin(); ?>

            <div class='col-md-6'>

            <?= $form->field($model, 'codigo')->textInput(['maxlength' => true, 'placeholder' => 'Codigo del Articulo']) ?>

            </div>
            <div class='col-md-6'>

            <?= $form->field($model, 'stock')->textInput(['maxlength' => true, 'placeholder' => 'Cantidad de Articulos']) ?>

            </div>

            <div class='col-md-6'>

            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, 'placeholder' => 'Nombre Del Articulo']) ?>

            </div>

            <div class='col-md-6'>

            <?= $form->field($model, 'proveedor')->textInput(['maxlength' => true, 'placeholder' => 'Proveedor']) ?>

            </div>

            <div class='col-md-6'>

            <?= $form->field($model, 'rubro')->textInput(['maxlength' => true, 'placeholder' => 'Rubro']) ?>

            </div>

        </div>

    </div>

</div>

        
<div class="card-footer ml-auto mr-auto">
    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>

</div>
<?php ActiveForm::end(); ?>


    
