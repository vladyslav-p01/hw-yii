<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 19:00
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var $site
 * @var $siteTypes
 *
 * @var $user
 * @var $genders
 */
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>



    <?= $form->field($site, 'title')->label('Название сайта') ?>
    <?= $form->field($site, 'description')->label('Описание сайта')->textarea() ?>

    <?= $form->field($site, 'site_type_id')->dropDownList(
        $siteTypes, ['prompt' => 'Выберите тип сайта...']
    )->label('Выберите тип сайта')->hint('По умолчанию будет \'Блог\'') ?>
    <?= $form->field($site, 'site_url')->input('url')->hint('Адрес текущего веб-сайта') ?>

<div style="border: solid">
    <h3 style="padding: 10px"> Введите данные владельца </h3>
    <?= $form->field($user, 'username')->label('Ваше имя') ?>
    <?= $form->field($user, 'gender_id')->radioList($genders)->label('Ваш пол') ?>
    <?= $form->field($user, 'email')->label('Адрес електронной почты') ?>
    <?= $form->field($user, 'age')->input('number')->label('Возраст владельца сайта') ?>
    <?= $form->field($user, 'photo')->fileInput()->label('Загрузите фото') ?>
    <?= $form->field($user, 'phone')->label('Введите номер телефона') ?>
</div>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
