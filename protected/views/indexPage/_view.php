<?php
/* @var $this AdminController */
/* @var $data Post */
?>

<div class="view">
    <div class="wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <?php echo  CHtml::link(CHtml::image(Post::PATH_TO_IMAGE.$data->image,'image',['width'=>'100px','height'=>'100px']),array('indexPage/show','id'=> $data->id))?>
                    <br />

                    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
                    <?php echo CHtml::encode($data->title); ?>
                    <br />
                </div>
            </div>

        </div>
    </div>
</div>