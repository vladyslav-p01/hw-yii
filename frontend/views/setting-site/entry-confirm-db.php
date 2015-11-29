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
    <li><label>siteType</label>: <?= Html::encode($model->site_type) ?></li>
    <li><label>siteUrl</label>: <?= Html::encode($model->site_url) ?></li>
    <hr>
    <li><label>name</label>: <?= Html::encode($model->user_name) ?></li>
    <li><label>gender</label>: <?= Html::encode($model->gender) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>ageCreator</label>: <?= Html::encode($model->age_creator) ?></li>
    <li><label>imageFile</label>: <?= Html::encode($model->image_file) ?></li>
    <li><label>phoneNumber</label>: <?= Html::encode($model->phone_number) ?></li>


</ul>

