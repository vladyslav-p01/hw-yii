<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 23:04
 */

namespace frontend\controllers;

use Yii;
use \frontend\models\UploadForm;
use yii\web\Controller;
use yii\web\UploadedFile;

class FileInputController extends Controller {


    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->validate();
            if ($model->imageFile) {
                $model->upload();
                return "<img src='/uploads/$model->imageFile'>";
            }
            return "You haven't uploaded file!";
        }
        return $this->render('upload-form', ['model' => $model]);
    }

}