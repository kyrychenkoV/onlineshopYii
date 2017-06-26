<?php
$this->breadcrumbs=array(
    'Posts'=>array('index'),
    $data->title,
);

?>
<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($data->title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
    <?php echo CHtml::encode($data->text); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_lists')); ?>:</b>

    <?php echo CHtml::encode($data->id_lists); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
    <?php echo CHtml::image(Post::PATH_TO_IMAGE.$data->image,'image',['width'=>'100px','height'=>'100px'])?>

    <br />

    <br />
</div>