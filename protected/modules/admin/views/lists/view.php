<?php
/* @var $this ListsController */
/* @var $model Lists */

$this->breadcrumbs=array(
	'Lists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Lists', 'url'=>array('index')),
	array('label'=>'Create Lists', 'url'=>array('create')),
	array('label'=>'Update Lists', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lists', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lists', 'url'=>array('admin')),
);
?>

<h1>View Lists #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'date_create',
	),
)); ?>
