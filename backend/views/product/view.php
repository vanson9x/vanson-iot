<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

// $this->title = 'Mã thiết bị: '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'power',
            'time_use',
            ['attribute'=>'created_at','format'=>['date', 'php:d-m-Y'],'label'=>'Ngày tạo'],
            ['attribute'=>'updated_at','format'=>['date', 'php:d-m-Y'],'label'=>'Ngày cập nhật'],
        ],
    ]) ?>

     <p>
        <!-- <?= Html::a('Cập nhật', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?> -->
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn chắc chắn muốn xóa thiết bị này ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
