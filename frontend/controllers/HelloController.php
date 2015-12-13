<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.12.15
 * Time: 19:16
 */

namespace frontend\controllers;


use yii\web\Controller;

class HelloController extends Controller {

    public $layout = 'site';

    public function actionIndex()
    {
        return $this->render('my-widget-use');
    }
}