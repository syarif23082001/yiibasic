<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PelajarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pelajars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelajar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pelajar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'nama',
            'tgl_lahir',
            'jekel',
            'alamat',
            //'id_fakultas',
            'fakultas.nama_fakultas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
