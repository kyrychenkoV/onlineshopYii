<?php


/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 20.06.2017
 * Time: 8:34
 */
class IndexController extends Controller
{
    public $path='D:/xampp/htdocs/testProject/images/two.jpg';
    public $layouts='new';

    public function actionIndex()
    {
//        $lists=Lists::model()->findAll();
        $post=Post::model()->findByPk(1);
        $list=$post->list->name;
        $lists=Lists::model()->findByPk(1);
        $posts=$lists->posts;

        $array=Post::model()->findAll();
$model = new MyModel();
$model->category_id = 1;

//echo $searchForm->dropDownList($model, 'category_id', CHtml::listData(Category::model()->findAll(), 'id', 'name'));

var_dump($array);exit;
        echo (__METHOD__);
        $this->render('index');


        return $this->render('index',['model' => $model,]);


    }

    public function actionShow()
    {
        echo (__METHOD__);

        return $this->render('show');


    }


}