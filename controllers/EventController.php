<?php

namespace app\controllers;

use Yii;
use app\models\Event;
use app\models\EventSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\filters\AccessControl;

use app\models\Room;
/**
 * EventController implements the CRUD actions for Event model.
 */
class EventController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'admin', 'create', 'update', 'delete', 'view'], //all action
                'rules' => [
                    [
                        'actions' => ['admin', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['index', 'view'],
                        'allow' => true,
                        'roles' => ['?', '@']
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Event models.
     * @return mixed
     */
    public function actionIndex()
    {
        $models = Event::find()->with('room')->all();
        //var_dump($models);
        $events = array();
        foreach ($models as $value) {
          $event = New \yii2fullcalendar\models\Event();
          //$event->id = $value->id;
          $event->title = $value->title . ' ห้อง ' . $value->room->roomnum;
          $event->start = date('Y-m-d',strtotime($value->start));
          $event->end = date('Y-m-d', strtotime('+1 day', strtotime($value->finish)));
          $event->color = $value->room->color;
          $events[] = $event;
        }
        //var_dump($Event);
        return $this->render('index',[
         'events' => $events,
         //'searchModel' => $searchModel,
         //'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAdmin()
    {
        $this->layout = 'admin';
        $searchModel = new EventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder = ['id'=>'DESC'];

        $models = Event::find()->with('room')->all();
        //var_dump($models);
        $events = array();
        foreach ($models as $value) {
          $event = New \yii2fullcalendar\models\Event();
          //$event->id = $value->id;
          $event->title = $value->title . ' ห้อง ' . $value->room->roomnum;
          $event->start = date('Y-m-d',strtotime($value->start));
          $event->end = date('Y-m-d', strtotime('+1 day', strtotime($value->finish)));
          $event->color = $value->room->color;
          $events[] = $event;
        }

        return $this->render('admin', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'events' => $events,
        ]);
    }
    /**
     * Displays a single Event model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Event model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
      $this->layout = 'admin';
        $model = new Event();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Event model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
      $this->layout = 'admin';
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Event model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['admin']);
    }

    /**
     * Finds the Event model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Event the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Event::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

//    public function actionJsoncalendar($start=NULL,$end=NULL,$_=NULL){
//
//      $data = Event::find()->with('room')->all();
//      //$room = new Room();
//
//      $events = array();
//
//      foreach ($data AS $value){
//        //Testing
//        $event = new \yii2fullcalendar\models\Event();
//        $event->id = $value->id;
//        $event->title = $value->title . ' ห้อง ' . $value->roomid;
//        $event->start = $value->start;
//        $event->end = date('Y-m-d', strtotime('+1 day', strtotime($value->finish)));
//        $event->color = '#ee87fe';
//        $events[] = $event;
//      }
//
//      //header('Content-type: application/json');
//      echo Json::encode($events);
//
//      Yii::$app->end();
//      //print_r(Json::encode($Event));
//    }
}
