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
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>