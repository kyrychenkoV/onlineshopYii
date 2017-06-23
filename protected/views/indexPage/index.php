<?php
/* @var $this AdminController */
/* @var $model Post */

$this->breadcrumbs=array(
    'Posts'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label'=>'List Post', 'url'=>array('index')),
    array('label'=>'Create Post', 'url'=>array('create')),
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

<h1>Show Posts</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'sortableAttributes'=>array(
        'title',
        'id',
        'create_time'=>'Posts',
    ),


));
?>
