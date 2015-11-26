<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 23:04
 */

namespace frontend\controllers;

use \frontend\models\UploadForm;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class FileInputController extends Controller {

    public function actionUploading()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->upload()) {
                // file is uploaded successfully
                return "<img src=\"uploads/" . UploadedFile::name . "\">";
            }
        }
        return $this->render('upload-form', ['model' => $model]);
    }

}