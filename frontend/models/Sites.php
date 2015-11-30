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
 * @property string $site_type
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
class Sites extends \yii\db\ActiveRecord
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
        return 'sites';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['title', 'email', 'user_name', 'gender'], 'required',
                'message' => 'Данное поле обязательно к заполнению'],

            [['title', 'user_name'], 'string', 'length' => [3, 20],
                'message' => 'Пожалуйста проверьте правильность данных'],

            ['email', 'email'],

            ['age_creator', 'integer', 'min' => 18, 'max' => 100,
                'message' => 'Введите реальный возраст'],

            ['site_type', 'default', 'value' => 'Блог'],

            [['image_file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],

            ['phone_number', 'match', 'pattern' => '/^\+380\d{9}$/',
                'message' => 'Пожалуйста введите корректный номер телефона'],

            ['site_url', 'url', 'message' => 'Пожалуйста введите адрес сайта начиная с http://'],

            ['gender', 'in', 'range' => ['male', 'female'], 'message' => 'Пожалуйта укажите Ваш пол']



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
            'site_type' => 'Site Type',
            'site_url' => 'Site Url',
            'image_file' => 'Image File',
            'phone_number' => 'Phone Number',
            'user_name' => 'User Name',
            'gender' => 'Gender',
        ];
    }

    public function uploadImage()
    {
        if ($this->image_file) {
            $this->image_file->saveAs('uploads/' . $this->image_file->baseName . '.'
                . $this->image_file->extension);
            return true;
        } else {
            $this->image_file = "Picture is not uploaded";
            return false;
        }

    }
}
