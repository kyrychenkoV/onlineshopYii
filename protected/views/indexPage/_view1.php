<?php
/* @var $this AdminController */
/* @var $data Post */
?>

<div class="view">

    <р>Заглушка1 </р>
    <div class="wrapper">
        <div class="container">
            <div class="row">



                <div class="col-lg-2">
<!---->
<!--                    <div><span class="left-title">Категорії товарів</span></div>-->
<!--                    --><?php // $array = Lists::model()->findAll();?>
<!--                    <!--                -->--><?php ////CHtml::activeCheckBox('Lists','id',CHtml::listData(Lists::model()->findAll(array('order' => 'name')), 'id', 'name'))?>
<!--                    <hr>-->
<!---->
<!--                    <div class="product  col-lg-1 col-md-12 col-xs-12">-->
<!---->
<!--
<!--                    </div>-->
                    <h1>NEN</h1>
                    <h1>TestSearch</h1>
                </div>
                <div class="col-lg-10">
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
                    <?php echo CHtml::encode($data->image); ?>
                    <?php echo CHtml::image('./images/'.$data->image,'image',['width'=>'100px','height'=>'100px'])?>

                    <br />

                    <b><?php echo CHtml::encode($data->getAttributeLabel('date_create')); ?>:</b>
                    <?php echo CHtml::encode($data->date_create); ?>
                    <br />

                    <b><?php echo CHtml::encode($data->getAttributeLabel('last_status_change')); ?>:</b>
                    <?php echo CHtml::encode($data->last_status_change); ?>
                    <br />

                    <div class="title"> <span>Перелік товарів</span></div>
                    <hr class="line">
                    <div class="row">


<!--                        <div class="product col-lg-2 col-md-3 col-xs-6">-->
<!--                            <a href="/post?id={{$post->id}}"><p><img class="picture" src="{{asset($postOne->getImage().$post->img)}}" style="width:150px;height: 200px"></p></a>-->
<!--                            <div class="title-group"><p>{{ $post->product_name }}</p></div>-->
<!--                        </div>-->

                    </div>
                </div>

            </div>

        </div>
    </div>


</div>