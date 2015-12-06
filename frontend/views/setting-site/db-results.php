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
//var_dump($result);
?>
<style>
    table {
        border: 1px solid #000000
        border-collapse: collapse;
    }
    td {
        border: solid 1px #000000;
    }
</style>

<table>
    <?php foreach ($result as $order): ?>
        <tr>
            <td><?= $order->user->username ?></td>
            <td>
                <ul>
                    <?php foreach ($order->sites as $site): ?>
                        <li><?= $site->title . " " . $site->site_url ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
