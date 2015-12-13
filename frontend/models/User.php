<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property integer $age
 * @property integer $gender_id
 * property string $phone
 * @property string $photo
 *
 * @property Gender $gender
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'gender_id', 'phone'],
                'required',
                'message' =>
                    'Пожалуйста заполните это поле'],

            [['username'], 'unique',
                'targetClass' =>
                    '\frontend\models\User',
                'message' =>
                    'Этот никнейм уже занят'],
            [['username'], 'string', 'max' => 15],

            [['age', 'gender_id'], 'integer'],
            ['gender_id', 'in',
                'range' => ['1', '2'],
                'message' =>
                    'Пожалуйта укажите Ваш пол'],

            [['email'], 'string', 'max' => 50],
            [['email'], 'email'],
            ['email', 'unique',
                'targetClass' =>
                    '\frontend\models\User',
                'message' =>
                    'Этот email уже занят'],

            ['age', 'integer',
                'min' => 18, 'max' => 100,
                'message' =>
                    'Введите реальный возраст'],

            [['photo'], 'image',
                'skipOnEmpty' => true,
                'extensions' => 'png, jpg, jpeg'],

            [['phone'], 'string', 'max' => 13],

            ['phone', 'match',
                'pattern' => '/^\+380\d{9}$/',
                'message' =>
                    'Пожалуйста введите
                    корректный номер телефона']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Имя пользователя',
            'email' => 'Email',
            'age' => 'Возраст',
            'gender_id' => 'Пол',
            'phone' => 'Телефон',
            'photo' => 'Фото',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getGender()
    {
        return $this->hasOne(Gender::className(), ['id' => 'gender_id']);
    }

    public function getSites()
    {
        return $this->hasMany(Site::className(), ['owner_id' => 'id']);
    }

    public function uploadImage()
    {
        if ($this->photo instanceof UploadedFile) {
            $this->photo->saveAs('uploads/' . $this->photo->baseName . '.'
                . $this->photo->extension);
            // set text for recording to db
            $this->photo = $this->photo->getBaseName() . '.' . $this->photo->extension;
            return true;
        } else {
            $this->photo = '';
            return false;
        }

    }
}
