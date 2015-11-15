<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.11.15
 * Time: 23:27
 */

namespace frontend\controllers;

use frontend\models\GreetingModel;
use Yii;
use yii\web\Controller;
use \frontend\components\ObjToArrayComponent;

class GreetingController extends Controller
{

    public function actionIndex($message = 'Привет')
    {
        return $this->render('index', ['message' => $message]);
    }

    public function actionAdd()
    {
        $request = Yii::$app->request;
        $a = $request->get('a');
        $b = $request->get('b');
        if ($a && $b) {
            $result = $a + $b;
            return $this->render('add', ['result' => $result]);
        }
        return $this->render('addForm');
    }

    public function actionRead()
    {
        $model = new GreetingModel();
        return $this->render('readModel', [
            'read' => $model->getParameter()
        ]);
    }

    public function actionComponent()
    {
        $model = new GreetingModel();
        $toArr = new ObjToArrayComponent();
        $modelFields = $toArr->convertToArr($model);
        return $this->render('componentView',
            ['ComponentString' => json_encode($modelFields)]
        );
    }










}