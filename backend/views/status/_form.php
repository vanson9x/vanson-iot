<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\dropDownList;

/* @var $this yii\web\View */
/* @var $model backend\models\Status */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_product')->dropDownList($items,['prompt'=>'--Chọn thiết bị--']) ?>
    <?= $form->field($model, 'turn_on')->checkBox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
