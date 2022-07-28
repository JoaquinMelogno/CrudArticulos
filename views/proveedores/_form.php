<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

  
<div class="card-body">

    <div class="row">

        <div class="col-md-12">

        <?php $form = ActiveForm::begin(); ?>
            <div class='col-md-6'>

            <?= $form->field($model, 'nombre')->textInput(['placeholder' => 'Nombre del proveedor']) ?>

            </div>

            <div class='col-md-6'>

            <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'placeholder' => 'Telefono de contacto']) ?>

            </div>

            <div class='col-md-6'>

            <?= $form->field($model, 'mail')->textInput(['maxlength' => true, 'placeholder' => 'Mail']) ?>

            </div>
        </div>

    </div>

</div>

        
<div class="card-footer ml-auto mr-auto">
    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>

</div>
<?php ActiveForm::end(); ?>


    
