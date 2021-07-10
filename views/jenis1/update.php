<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenis1 */

$this->title = 'Update Jenis1: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
