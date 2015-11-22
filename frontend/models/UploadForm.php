<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 22:48
 */

namespace frontend\models;


use yii\base\Model;
use yii\web\UploadedFile;


class UploadForm extends Model {

    public $image;

    /**
     * @var UploadedFile
     * @return array
     */

    public function rules()
    {
        return [
            [
                ['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->image->saveAs('uploads/'.$this->image->baseName.'.'
                .$this->image->extension);
            return true;
        }
        else {
            return false;
        }
    }

}