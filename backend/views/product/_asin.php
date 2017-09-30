<?php
/**
 * Created by PhpStorm.
 * User: igorzabavskyi
 * Date: 9/26/17
 * Time: 6:27 PM
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asin')->textInput(['maxlength' => true])->label('Just input Amazon ASIN') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Get' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-warning' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
