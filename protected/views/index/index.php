<?php
    $this->pageTitle=Yii::app()->name;
    $this->layout = 'new';
?>

<р>Заглушка1 </р>
<div class="wrapper">
    <div class="container">
        <div class="row">

            <div class="alert alert-success">

            </div>

            <div class="col-lg-2">

                <div><span class="left-title">Категорії товарів</span></div>
                <hr>

                <div class="product  col-lg-12 col-md-12 col-xs-12">


                </div>


            </div>
            <div class="col-lg-10">
                <div class="title"> <span>Перелік товарів</span></div>
                <hr class="line">
                <div class="row">

                    <div class="product col-lg-2 col-md-3 col-xs-6">
                        <a href="/post?id={{$post->id}}"><p><img class="picture" src="{{asset($postOne->getImage().$post->img)}}" style="width:150px;height: 200px"></p></a>
                        <div class="title-group"><p>{{ $post->product_name }}</p></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>