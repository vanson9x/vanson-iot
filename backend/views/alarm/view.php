<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Alarm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alarms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alarm-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'begin',
            'count',
            'id_product',
            ['attribute'=>'created_at','format'=>['date', 'php:d-m-Y'],'label'=>'Ngày tạo'],
            ['attribute'=>'updated_at','format'=>['date', 'php:d-m-Y'],'label'=>'Ngày cập nhật'],
        ],
    ]) ?>
    
    <p>
        <!-- <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?> -->
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    

</div>