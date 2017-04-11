<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Product;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $model backend\models\Status */

// $this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'class' => DataColumn::className(), // this line is optional
                'attribute' => 'turn_on',
                'label' => 'Trạng thái',
                'value' => function($model){return $model->turn_on?'Bật':'Tắt';},
            ],

            [
                'class' => DataColumn::className(), // this line is optional
                'attribute' => 'id_product',
                'label' => 'Tên thiết bị',
                'value' => function($model){
                    return Product::find()->where($model->id_product)->one()->name;
                },
            ],
            'created_at',
            'updated_at',
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
