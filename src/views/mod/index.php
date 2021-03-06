<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */

$this->title = 'Mods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mod-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    echo $this->render('_search', ['model' => $searchModel]);
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('_view', ['model' => $model]);
        },
        'pager' => [
            'maxButtonCount' => 0,
            'options' => ['class' => 'pager'],
            'nextPageLabel' => 'Next <i class="glyphicon glyphicon-chevron-right"></i>',
            'prevPageLabel' => '<i class="glyphicon glyphicon-chevron-left"></i> Prev',
        ],
    ]);
    ?>

</div>
