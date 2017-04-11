<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- button show modal thêm thiết bị -->
    <p class="clear">
        <?= Html::button('Thêm trạng thái',['value'=>Url::to('create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

    <!-- Modal thêm trạng thái-->
    <?php Modal::begin([
        'header'=>'<h1 id="titleModal" class="text-primary"></h1>',
        'id'=>'modal',
        'size'=>'modal-lg',
        'clientOptions' => ['backdrop' => 'static'], 
        ]);
        echo '<div id="modalContent"></div>';
    Modal::end(); ?>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'turn_on',
            'id_product',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
