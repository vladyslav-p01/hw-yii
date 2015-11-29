<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 18:54
 */

namespace frontend\controllers;

use Yii;
use frontend\models\Sites;
use yii\base\Controller;
use yii\web\UploadedFile;

class SettingSiteController extends Controller
{

    public function actionEntry()
    {
        $model = new Sites();
        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) &&
                $model->validate()
            ) {
                $model->image_file = UploadedFile::getInstance($model, 'image_file');
                $model->uploadImage();
                //$model->save();
                return $this->render('entry-confirm-db', ['model' => $model]);
            }
        }

        return $this->render('entry-db', ['model' => $model]);
    }


}