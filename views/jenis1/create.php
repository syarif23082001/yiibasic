<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenis1 */

$this->title = 'Create Jenis1';
$this->params['breadcrumbs'][] = ['label' => 'Jenis1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
