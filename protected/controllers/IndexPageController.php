<?php


/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 20.06.2017
 * Time: 8:34
 */
class IndexPageController extends Controller
{
//    public $path = 'D:/xampp/htdocs/testProject/images/two.jpg';
    public $layouts = 'new';

    public function actionIndex()
    {   $model = new Post('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Post'])) {
            $model->attributes = $_GET['Post'];
        }

        $dataProvider = new CActiveDataProvider('Post');
        $this->render('index', [
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);





    }
    public function loadModel($id)
    {
        $model = Post::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }

        return $model;
    }
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'post-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    public function actionShow()
    {
        echo(__METHOD__);

        return $this->render('show');


    }
    public function actionView($id)
    {
        $this->render('view', [
            'model' => $this->loadModel($id),
        ]);
    }
    public function actionIndexPage()
    {
        $model = new Post('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Post'])) {
            $model->attributes = $_GET['Post'];
        }
        $dataProvider = new CActiveDataProvider('Post');
        $this->render('indexPage', [
            'dataProvider' => $model->search(),
            'model' => $model,
        ]);
    }


}