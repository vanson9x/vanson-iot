<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AlarmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alarms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alarm-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="clear">
        <?= Html::button('Thêm hẹn giờ',['value'=>Url::to('create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

    <!-- Modal -->
    <?php Modal::begin([
        'header'=>'<h1 id="titleModal" class="text-primary"></h1>',
        'id'=>'modal',
        'size'=>'modal-lg',
        'clientOptions' => ['backdrop' => 'static'], 
        ]);
        echo '<div id="modalContent"></div>';
    Modal::end(); ?>

    <?php Pjax::begin() ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            ['attribute'=>'begin','format'=>['date', 'php:d-m-Y h:i:s'],'label'=>'Bắt đầu lúc'],
            'count',
            'id_product',
            ['attribute'=>'created_at','format'=>['date', 'php:d-m-Y'],'label'=>'Ngày tạo'],
            ['attribute'=>'updated_at','format'=>['date', 'php:d-m-Y'],'label'=>'Ngày cập nhật'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>


