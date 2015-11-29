<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 18:54
 */

namespace frontend\controllers;

use Yii;
use frontend\models\SettingSiteForm;
use yii\base\Controller;
use yii\web\UploadedFile;

class SettingSiteController extends Controller
{

    public function actionEntry()
    {
        $model = new SettingSiteForm();
        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) &&
                $model->validate()
            ) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                $model->uploadImage();
                return $this->render('entry-confirm', ['model' => $model]);
            }
        }

        return $this->render('entry', ['model' => $model]);
    }


}