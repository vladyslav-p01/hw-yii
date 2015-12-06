<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.11.15
 * Time: 20:42
 */

/**
 * @var $users
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
    th {
        border: 1px solid #000000;
        text-align: center;
    }
    thead {
        text-align: center;
        font-weight: 500;
    }
</style>

<table>
    <tr>
        <th>Пользователи</th>
        <th>Пользовательские сайты</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->username ?></td>
            <td>
                <ul>
                    <?php foreach ($user->sites as $site): ?>
                        <li><?= $site->title . " " . $site->site_url ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h1 align="center">Информация о пользователях</h1>
<table>
    <thead>
        <tr>
            <th>Имя пользователя</th>
            <th>Email</th>
            <th>Возраст</th>
            <th>Пол</th>
            <th>Телефон</th>
            <th>Фото</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->username ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->age ?></td>
                <td><?= $user->gender->title ?></td>
                <td><?= $user->phone ?></td>
                <td><?= $user->photo ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>