<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 19:06
 */

use yii\helpers\Html;
?>

<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Title</label>: <?= Html::encode($model->title) ?></li>
    <li><label>Description</label>: <?= Html::encode($model->description) ?></li>
    <li><label>siteType</label>: <?= Html::encode($model->siteType) ?></li>
    <li><label>siteUrl</label>: <?= Html::encode($model->siteUrl) ?></li>
    <hr>
    <li><label>name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>gender</label>: <?= Html::encode($model->gender) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>ageCreator</label>: <?= Html::encode($model->ageCreator) ?></li>
    <li><label>imageFile</label>: <?= Html::encode($model->imageFile) ?></li>
    <li><label>phoneNumber</label>: <?= Html::encode($model->phoneNumber) ?></li>


</ul>

