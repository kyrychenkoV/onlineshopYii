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

    public function actionIndex()
    {
        echo (__METHOD__);
        echo ('lalalalalalalal');
        $post=new Post();

        $posts=$post->findAll();
        foreach($posts as $post){
            echo($post->text);
    }
//        var_dump($post->findAll());
//        $post->title='kfkffk';
//        $post->text="dfsdfsdf";
//        $post->id_lists=2;
//        $post->save();
//
        $list=new Lists();

        $list->name="Moloko";
        $list->save();


        return $this->render('index');


    }

    public function actionShow()
    {
        echo (__METHOD__);

        return $this->render('show');


    }


}