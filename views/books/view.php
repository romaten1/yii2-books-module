<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use romaten1\books\models\Authors;

/* @var $this yii\web\View */
/* @var $model app\modules\books\models\Books */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'date',
                'format'    => [ 'date', 'php:jS F Y' ]
            ],
            [
                'attribute' => 'date_create',
                'format'    => [ 'date', 'php:jS F Y' ]
            ],
            [
                'attribute' => 'preview',
                'format'    => 'html',
                'value'     => Html::img( "img/books/thumbs/thumb_" . $model->preview, [ 'width' => '100px' ] )
            ],
            [
                'attribute' => 'author_id',
                'value'     => Authors::getAuthorById($model->author_id)
            ],
        ],
    ]) ?>
    <?= Html::button('Закрыть', ['title' => 'Закрыть', 'class' => 'hideModalButton btn btn-success']); ?>


</div>
