<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \app\models\tables\Users;

/* @var $this yii\web\View */
/* @var $model app\models\tables\Task */
/* @var $form yii\widgets\ActiveForm */

/* @var $usersList[] \app\controllers\AdminTaskController */
/* @var $statusesList[] \app\controllers\AdminTaskController */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

<!--    Выпадающий список пользователей-->
    <?= $form->field($model, 'creator_id')->dropDownList($usersList); ?>

<!--    Выпадающий список пользователей-->
    <?= $form->field($model, 'responsible_id')->dropDownList($usersList); ?>

    <?= $form->field($model, 'deadline')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'status_id')->dropDownList($statusesList) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
