<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.12.15
 * Time: 15:53
 *
 * @var $dataProvider
 * @var $userProvider
 */
use yii\grid\GridView;
//$query->joinWith(['author' => function($query) { $query->from(['author' => 'users']); }]);

?>


<?= GridView::widget(['dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'username',
        'email',
        'age',
        [
            'class' => 'yii\grid\DataColumn',
            'label' => 'Пол',
            'value' => function ($data) {
                return $data->gender->title;
            }
        ]
    ]
]) ?>

