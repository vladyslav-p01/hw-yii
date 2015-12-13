<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "sites".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $site_type_id
 * @property string $site_url
 *

 */
class Site extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['title'], 'required',
                'message' => 'Данное поле обязательно к заполнению'],

            [['title'], 'string', 'length' => [3, 20],
                'message' => 'Пожалуйста проверьте правильность данных'],
            [['description'], 'string', 'length' => [5, 100]],

            ['site_type_id', 'default', 'value' => 1],

            ['site_url', 'url', 'message' => 'Пожалуйста введите адрес сайта в формате http://example.com'],
            ['site_url', 'unique', 'targetClass' => '\frontend\models\Site', 'message' => 'Данный URL уже занят']
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'site_type_id' => 'Site Type',
            'site_url' => 'Site Url'
        ];
    }

}
