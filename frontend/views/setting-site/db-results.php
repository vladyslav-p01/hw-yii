<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.11.15
 * Time: 20:42
 */

/**
 * @var $result
 */
use yii\helpers\Html;
?>
<ul>
<?php foreach ($result as $row): ?>
    <?php foreach ($row as $element): ?>
    <li><?= Html::encode($row->)></li>?>
    <?php endforeach; ?>
<?php endforeach; ?>
</ul>