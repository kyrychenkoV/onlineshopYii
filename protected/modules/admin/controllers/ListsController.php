<?php

class ListsController extends Controller
{

    public $layout = '//layouts/column2';


    public function filters()
    {
        return [
            'accessControl',
            'postOnly + delete',
        ];
    }


    public function accessRules()
    {
        return [
            ['allow',
                'actions' => ['index', 'view'],
                'users'   => ['*'],
            ],
            ['allow',
                'actions' => ['create', 'update'],
                'users'   => ['@'],
            ],
            ['allow',
                'actions' => ['admin', 'delete'],
                'users'   => ['admin'],
            ],
            ['deny',
                'users' => ['*'],
            ],
        ];
    }


    public function actionView($id)
    {
        $this->render('view', [
            'model' => $this->loadModel($id),
        ]);
    }


    public function actionCreate()
    {
        $model = new Lists;

        if (isset($_POST['Lists'])) {
            $model->attributes = $_POST['Lists'];
            if ($model->save()) {
                $this->redirect(['view', 'id' => $model->id]);
            }
        }

        $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);


        if (isset($_POST['Lists'])) {
            $model->attributes = $_POST['Lists'];
            if ($model->save()) {
                $this->redirect(['view', 'id' => $model->id]);
            }
        }

        $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();


        if (!isset($_GET['ajax'])) {
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : ['admin']);
        }
    }


    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Lists');
        $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAdmin()
    {
        $model = new Lists('search');
        $model->unsetAttributes();
        if (isset($_GET['Lists'])) {
            $model->attributes = $_GET['Lists'];
        }

        $this->render('admin', [
            'model' => $model,
        ]);
    }


    public function loadModel($id)
    {
        $model = Lists::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }

        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'lists-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
