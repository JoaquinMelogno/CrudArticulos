<?php

namespace app\controllers;

use Yii;
use app\models\Articulos;
use app\models\ArticulosSearch;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\ContactForm;
use app\extensions\SYii;
use app\models\Clients;
use app\controllers\NotFoundHttpException;


class ArticulosController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all WkParametros models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticulosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WkParametros model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new WkParametros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new Articulos();

        if ($model->load(Yii::$app->request->post())) {
            $model->id = Yii::$app->user->identity->client;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionClone($id)
    {

        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $clone = new Articulos();
            $clone->attributes = $model->attributes;
            $clone->isNewRecord = true;
            $clone->id = null;
            $clone->save();
            return $this->redirect(['view', 'id' => $clone->id]);

        }

        $model->cliente = null;
        return $this->render('clone', [
            'model' => $model,
        ]);

    }

    /**
     * Deletes an existing WkParametros model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WkParametros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WkParametros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Articulos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
