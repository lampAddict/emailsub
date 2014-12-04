<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'Email subscribe page';

echo '<div class="site-index">';

if( $model ){
    $form = ActiveForm::begin([
        'id' => 'subscribe-form',
        'options' => ['class' => 'form-horizontal'],
    ]);
    echo $form->field($model, 'email');
    echo '<div class="form-group">' . Html::submitButton('Save', ['class' => 'btn btn-primary']) . '</div>';

    ActiveForm::end();
}
else{
    echo '<div class="jumbotron">'.$list.'</div>';
}

echo '</div>';
