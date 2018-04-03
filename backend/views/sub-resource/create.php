<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\SubResource $model
 */

$this->title = Yii::t('models', 'Sub Resource');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Sub Resources'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud sub-resource-create">

    <h1>
        <?= Yii::t('models', 'Sub Resource') ?>
        <small>
            <?= $model->id ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?= Html::a(
                'Cancel',
                \yii\helpers\Url::previous(),
                ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr/>

    <?= $this->render('_form', [
        'model' => $model,
    ]); ?>

</div>
