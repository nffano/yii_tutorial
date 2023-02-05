<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

if (Yii::$app->session->hasFlash('success')) {
    echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
}
$form = ActiveForm::begin();

echo $form->field($model, 'name');
echo $form->field($model, 'email');
echo '<br>';
echo Html::submitButton('Submit', array('class' => 'btn btn-success'));
$form = ActiveForm::end();
?>