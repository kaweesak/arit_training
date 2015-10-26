<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

class AdminController extends Controller {
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
                'only' => ['index', 'create', 'update', 'delete', 'view'], //all action
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'delete', 'view'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    
                ],
            ],
        ];
    }
    
    public function actionIndex() {
        //$searchModel = new AlbumSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this->layout = 'admin';
        return $this->render('index');
    }
}

