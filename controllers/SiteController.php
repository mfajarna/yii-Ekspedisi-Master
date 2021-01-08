<?php

namespace app\controllers;

use app;
use Yii;
use yii\web\Response;
use app\models\TbTarif;
use yii\web\Controller;
use app\models\DataForm;
use app\models\LoginForm;
use app\models\TarifForm;

use app\models\TbService;
use app\models\ContactForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {   
        $model = new TbTarif();
      
        if($model->load(Yii::$app->request->post()) && $model->save())
        {   
                return $this->redirect(['create','id' => $model->id,
                ]); 
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }


    public function actionView($id)
    { 
    
    

       

       return $this->render('view',[
        'model' => $this->findModel($id),
        
       ]); 
    }

    public function actionService()
    {
        
    }

    public function actionCreate($id)
    {

        $list = ['BEST' => 'BEST', 'MANTAP' => 'MANTAP' ];

        $model = new TbTarif();
        if($model->load(Yii::$app->request->post()) && $model->save())
        {   
                return $this->redirect(['view','id' => $model->id,
                ]); 
        }

        return $this->render('create', [
            'model' => $this->findModel($id),
            'list' => $list
        ]);
    }



    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }



    

    protected function findModel($id)
    {
        if(($model = TbTarif::findOne($id)) !== null)
        {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
