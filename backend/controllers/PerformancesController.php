<?php

namespace backend\controllers;

use Yii;
use common\models\Performances;
use common\models\PerformancesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerformancesController implements the CRUD actions for Performances model.
 */
class PerformancesController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Performances models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerformancesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Performances model.
     * @param integer $performance_id
     * @param integer $artist_id
     * @param integer $place_id
     * @return mixed
     */
    public function actionView($performance_id, $artist_id, $place_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($performance_id, $artist_id, $place_id),
        ]);
    }

    /**
     * Creates a new Performances model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Performances();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'performance_id' => $model->performance_id, 'artist_id' => $model->artist_id, 'place_id' => $model->place_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Performances model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $performance_id
     * @param integer $artist_id
     * @param integer $place_id
     * @return mixed
     */
    public function actionUpdate($performance_id, $artist_id, $place_id)
    {
        $model = $this->findModel($performance_id, $artist_id, $place_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'performance_id' => $model->performance_id, 'artist_id' => $model->artist_id, 'place_id' => $model->place_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Performances model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $performance_id
     * @param integer $artist_id
     * @param integer $place_id
     * @return mixed
     */
    public function actionDelete($performance_id, $artist_id, $place_id)
    {
        $this->findModel($performance_id, $artist_id, $place_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Performances model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $performance_id
     * @param integer $artist_id
     * @param integer $place_id
     * @return Performances the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($performance_id, $artist_id, $place_id)
    {
        if (($model = Performances::findOne(['performance_id' => $performance_id, 'artist_id' => $artist_id, 'place_id' => $place_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
