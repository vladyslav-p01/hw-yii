<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 14:50
 */

namespace frontend\models;


use yii\base\Model;

class SettingSiteForm extends Model {

    public $title; // строка + не меньше чем 3 символа
    public $description; // строка + не меньше чем 4-ри символа.
    public $email; //email
    public $siteType; //select dropDownList
    public $siteUrl; //URL
    public $ageCreator; // Валидатор сравнения(больше 18)
    public $picture; // Валидатор изображений
    public $phoneNumber;// Валидатор с регулярным выражением(для ввода телефона)
    public $name;

    public function rules()
    {
        return [
            [['title', 'description', 'email'], 'required'],
            ['email', 'email']
        ];
    }
}