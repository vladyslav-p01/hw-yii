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

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'title')->label('Название сайта') ?>
    <?= $form->field($model, 'description')->label('Описание сайта')->textarea() ?>

    <?= $form->field($model, 'site_type')->dropDownList(
        [
            '0' => 'Блог',
            '1' => 'Магазин',
            '2' => 'Сайт-визитка',
            '3' => 'Форум',
            '4' => 'Социальная сеть'
        ],
        ['prompt' => 'Выберите тип сайта...']
    )->label('Выберите тип сайта')->hint('По умолчанию будет \'Блог\'') ?>
    <?= $form->field($model, 'site_url')->input('url')->hint('Адрес текущего веб-сайта') ?>
    <div style="border: solid">
        <h3 style="padding: 10px"> Введите данные владельца </h3>
        <?= $form->field($model, 'user_name')->label('Ваше имя') ?>
        <?= $form->field($model, 'gender')->radioList(
            ['male' => 'Мужской','female' => 'Женский'])
            ->label('Ваш пол') ?>
        <?= $form->field($model, 'email')->label('Адрес електронной почты') ?>
        <?= $form->field($model, 'age_creator')->input('number')->label('Возраст владельца сайта') ?>
        <?= $form->field($model, 'image_file')->fileInput()->label('Загрузите фото') ?>
        <?= $form->field($model, 'phone_number')->label('Введите номер телефона') ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
