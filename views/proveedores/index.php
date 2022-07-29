<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WkParametrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Proveedores');
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary card-header-icon">
            <h4 class="card-title">
            <?= Html::encode($this->title) ?>
                <div class="pull-right">

                    <?= Html::a('<b class="material-icons">keyboard_arrow_left</b>', ['/mitrabajo/clientes/index'], ['class' => 'btn btn-xs btn-primary btn-round btn-fab','rel'=>'tooltip', 'data-placement'=>'bottom', 'data-original-title'=>Yii::t('app', 'Back')]) ?>
                    
                    <?= Html::button('<b class="material-icons">search</b>', ['class' => 'btn btn-xs btn-primary btn-round btn-fab','rel'=>'tooltip', 'data-placement'=>'bottom', 'data-original-title'=>Yii::t('app', 'Search'), 'onclick'=>"javascript: search();"]) ?>                  

                    <?= Html::a('<b class="material-icons">add</b>', ['create'], ['class' => 'btn btn-xs btn-primary btn-round btn-fab','rel'=>'tooltip', 'data-placement'=>'bottom', 'data-original-title'=>Yii::t('app', 'New')]) ?>
                </div>
            </h4>
        </div>

        <div class="card-body">
            <div class="material-datatables">
                <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        //['class' => 'yii\grid\SerialColumn'],

                        'nombre',
                        'telefono',
                        'mail',
                        //'sistema',
                        //'create_date',
                        //'create_uid',
                        //'write_date',
                        //'write_uid',
                        //'tipo',
                        //'ayuda:ntext',
                        //'grupo',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'min-width:80px;width:80px;'],
                            'template' => '{update}&nbsp;{view}&nbsp;{clone}&nbsp;{delete}',
                            'buttons' => [
                                'clone' => function ($url,$model) {
                                    return Html::a(
                                        '<span class="glyphicon glyphicon-duplicate"></span>',
                                        'index.php?r=/mitrabajo/parametro/clone&id='.$model["id"],
                                        [
                                            'title' => 'Proveedores',
                                            'data-pjax' => '0',
                                            'class' => '',
                                        ]
                                    );
                                },
                            ],
                        ],
                    ],

                ]); ?>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function search(){
    $('.wk-parametros-search').toggle(500);
}    
$('.wk-parametros-search').toggle();
$('.filters').toggle();
</script>



