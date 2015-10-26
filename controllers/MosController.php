<?php

namespace app\controllers;

use Yii;
use app\models\Course;
use app\models\CourseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Category;
use yii\data\ActiveDataProvider;

/**
 * CourseController implements the CRUD actions for Course model.
 */
class MosController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'admin', 'create', 'update', 'delete', 'view', 'mos'], //all action
                'rules' => [
                    [
                        'actions' => ['admin', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['index', 'view', 'mos'],
                        'allow' => true,
                        'roles' => ['?', '@']
                    ],
                ],
            ],
        ];
    }

    public function actionCertification() {
        //$searchModel = new CourseSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //$dataProvider->pagination->pageSize = 0;
        $query = Course::find()->where(['category_id' => '5']);
        $dataProvider = new ActiveDataProvider([
          'query' => $query,
          ]);
        
        $cat = new Category();

        return $this->render('mos', [
                    //'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'cat' => $cat,
        ]);
        //return $this->render('mos');
    }

}
