<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 18:54
 */

namespace frontend\controllers;

use frontend\models\Gender;
use frontend\models\SiteType;
use Yii;
use frontend\models\Site;
use yii\base\Controller;
use yii\web\UploadedFile;
use frontend\models\User;
use frontend\components\ObjToArrayComponent;
use yii\web\Response;
use yii\widgets\ActiveForm;
use yii\data\ActiveDataProvider;

class SettingSiteController extends Controller
{
    public $layout = 'site';

    public function actionSiteEntry()
    {
        $site = new Site();
        $user = new User();


        if (Yii::$app->request->isAjax) {

            if ($site->load(Yii::$app->request->post())) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($site);
            }
            if ($user->load(Yii::$app->request->post())) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($user);
            }
            return false;
        }

        if (Yii::$app->request->isPost) {

            if (
                $site->load(Yii::$app->request->post()) &&
                $site->validate() &&

                $user->load(Yii::$app->request->post()) &&
                $user->validate()
            ) {
                $user->photo = UploadedFile::getInstance($user, 'photo');
                $user->uploadImage();
                $user->save();

                $site->owner_id = $user->id;
                $site->save();

                return $this->render('entry-confirm-db', [
                    'site' => $site,
                    'user' => $user
                ]);
            }
        }

        $siteTypes = SiteType::find()->all();
        $genders = Gender::find()->all();

        $convertor = new ObjToArrayComponent();

        $siteTypes = $convertor->arrayWithObjToArray($siteTypes);
        $genders = $convertor->arrayWithObjToArray($genders);

        return $this->render('entry-db', [
            'site' => $site,
            'user' => $user,
            'genders' => $genders,
            'siteTypes' => $siteTypes
        ]);
    }

    public function actionShowAll()
    {
        $users = User::find()/*->all()*/;
        $dataProvider = new ActiveDataProvider([
            'query' => $users,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);


        return $this->render('grid-view' /*'db-results'*/, ['dataProvider' => $dataProvider, 'users' => $users]);
    }




}