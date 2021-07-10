<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\pelajar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelajar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?php
        echo $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), 
            ['options' => ['placeholder' => 'Pilih Tanggal Lahir ...'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
        ]);
    ?>

    <?= $form->field($model, 'jekel')->radioList(array('Laki-Laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'))->label('Jenis Kelamin') 
    ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Fakultas::find()->asArray()->all(), 'id', 'nama_fakultas');
        echo $form->field($model, 'id_fakultas')
        ->dropDownList(
            $dataPost,           
            ['id'=>'nama_fakultas']
        );

    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
