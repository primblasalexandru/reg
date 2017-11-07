<?php
use app\modules\Register\models\User;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>


<div class="user-form">
    <h1 > регистрация</h1>
    <br>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'FirstName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'LastName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Patronymic')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

