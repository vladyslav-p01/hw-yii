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
 * var UploadedFile
 * property string image_file
 *
 * @property string $phone_number
 * @property string $user_name
 * @property string $gender
 * @property integer $age_creator
 * @property string $email
 */
class Site extends \yii\db\ActiveRecord
{

    /**
     * @var UploadedFile
     *
     */
    public $image_file;


//    public $email;
//    public $age_creator;

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

            ['site_type_id', 'default', 'value' => 'Блог'],

            ['site_url', 'url', 'message' => 'Пожалуйста введите адрес сайта начиная с http://'],
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
            'site_url' => 'Site Url',
            'image_file' => 'Image File',
            'phone_number' => 'Phone Number',
            'user_name' => 'User Name',
            'gender' => 'Gender',
        ];
    }


}
