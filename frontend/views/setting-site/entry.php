<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 19:00
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title') ?>
    <?= $form->field($model, 'description') ?>
    <?= $form->field($model, 'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
