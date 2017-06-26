<?php


/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 20.06.2017
 * Time: 8:34
 */
class IndexPageController extends Controller
{
    public $layouts = 'new';

    public function actionIndex()
    {
        $model = new Post('search');
        $model->unsetAttributes();
        if (isset($_GET['Post'])) {
            $model->attributes = $_GET['Post'];
        }

        $this->render('index', [
            'dataProvider' => $model->search(),
            'model'        => $model,
        ]);


    }

    public function actionShow($id)
    {
        $this->render('show', [
            'data' => $this->loadModel($id),
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


}