<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 19:06
 */


/**
 * @var $site
 * @var $user
 */
use yii\helpers\Html;
?>

<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Title</label>: <?= Html::encode($site->title) ?></li>
    <li><label>Description</label>: <?= Html::encode($site->description) ?></li>
    <li><label>siteType</label>: <?= Html::encode($site->site_type_id) ?></li>
    <li><label>siteUrl</label>: <?= Html::encode($site->site_url) ?></li>
    <hr>
    <li><label>name</label>: <?= Html::encode($user->username) ?></li>
    <li><label>gender</label>: <?= Html::encode($user->gender_id) ?></li>
    <li><label>Email</label>: <?= Html::encode($user->email) ?></li>
    <li><label>ageCreator</label>: <?= Html::encode($user->age) ?></li>
    <li><label>imageFile</label>: <?= Html::encode($user->photo) ?></li>
    <li><label>phoneNumber</label>: <?= Html::encode($user->phone) ?></li>


</ul>

