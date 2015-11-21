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

    public $title;
    public $description;
    public $email;

    public function rules()
    {
        return [
            [['title', 'description', 'email'], 'required'],
            ['email', 'email']
        ];
    }
}