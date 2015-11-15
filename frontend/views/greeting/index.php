<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.11.15
 * Time: 23:36
 */

use yii\helpers\Html;

?>
<?= Html::encode($message) ?>
<hr>
<div>
    <a href="index.php?r=greeting/add">Add</a><br>
    <a href="index.php?r=greeting/read">Read from model</a><br>
    <a href="index.php?r=greeting/component">Using component</a><br>
</div>