<?php
//    $this->pageTitle=Yii::app()->name;
//    $this->layout = 'new';

$this->breadcrumbs=array(
    'Posts',
);

$this->menu=array(
    array('label'=>'Create Post', 'url'=>array('create')),
    array('label'=>'Manage Post', 'url'=>array('admin')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#post-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Posts</h1>
<!---->
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
<!--</div><!-- search-form -->-->
<!---->
<?php //$this->widget('zii.widgets.grid.CGridView', array(
//    'id'=>'post-grid',
//    'dataProvider'=>$model->search(),
//    'filter'=>$model,
//    'columns'=>array(
//        'id',
//        'title',
//        'text',
//        'id_lists',
//        'image',
//        'date_create',
//        array(
//            'class'=>'CButtonColumn',
//        ),
//    ),
//)); ?>


<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view1',
    'sortableAttributes'=>array(
        'title',
        'id',
        'create_time'=>'Post Time',
    ),


));
?>

</div><!-- search-form -->


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));  $model = Post::model()->findAll(); ?>
<!--<div class="search-form" style="display:none">-->
<!--    --><?php //$this->renderPartial('_search',array(
//        'model'=>$model,
//    )); ?>
<!---->
<!--    --><?php //$this->widget('zii.widgets.grid.CGridView', array(
//        'id'=>'post-grid',
//        'dataProvider'=>$model->search(),
//        'filter'=>$model,
//        'columns'=>array(
//            'id',
//            'title',
//            'text',
//            'id_lists',
//            'image',
//            'date_create',
//            /*
//            'last_status_change',
//            */
//            array(
//                'class'=>'CButtonColumn',
//            ),
//        ),
//    )); ?>
