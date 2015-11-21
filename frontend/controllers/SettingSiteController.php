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

class SettingSiteController extends Controller
{

    public function actionEntry()
    {
        $model = new SettingSiteForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('entry-confirm', ['model' => $model]);
        }
        else {
            return $this->render('entry', ['model' => $model]);
        }
    }

}