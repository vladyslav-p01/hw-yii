<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 14:50
 */

namespace frontend\models;


use yii\base\Model;
use yii\web\UploadedFile;


/**
 * Class SettingSiteForm
 * @var UploadedFile
 * @package frontend\models
 */

class SettingSiteForm extends Model {

    public $title;
    public $description;
    public $email;
    public $siteType;
    public $siteUrl;
    public $ageCreator;
    public $image;
    public $phoneNumber;
    public $name;
    public $gender;

    public function rules()
    {
        return [
            [['title', 'email', 'name', 'gender'], 'required',
                'message' => 'Данное поле обязательно к заполнению'],
            [['title', 'name'], 'string', 'length' => [3, 20],
                'message' => 'Пожалуйста проверьте правильность данных'],
            ['email', 'email'],
            ['ageCreator', 'integer', 'min' => 18, 'max' => 100,
                'message' => 'Введите реальный возраст'],
            ['siteType', 'default', 'value' => 'Блог'],
            /*['image', 'file', 'extensions' => 'png, jpg, jpeg', 'skipOnEmpty' => true],*/
            ['phoneNumber', 'match', 'pattern' => '/^\+380\d{9}$/',
                'message' => 'Пожалуйста введите корректный номер телефона'],
            ['siteUrl', 'url', 'message' => 'Пожалуйста введите адрес сайта начиная с http://'],
            ['gender', 'in', 'range' => ['male', 'female'], 'message' => 'Пожалуйта укажите Ваш пол']



        ];
    }

    public function uploadImage()
    {
        if (!$this->hasErrors()) {
            $this->image->saveAs('uploads/' . $this->image->baseName . '.'
                . $this->image->extension);
            return true;
        } else return false;
    }
}