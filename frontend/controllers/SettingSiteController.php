<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.15
 * Time: 18:54
 */

namespace frontend\controllers;

use frontend\models\Gender;
use frontend\models\Order;
use frontend\models\SiteType;
use Yii;
use frontend\models\Site;
use yii\base\Controller;
use yii\web\UploadedFile;
use frontend\models\User;
use frontend\components\ObjToArrayComponent;

class SettingSiteController extends Controller
{

    public function actionSiteEntry()
    {
        $site = new Site();
        $user = new User();
        $order = new Order();

        if (Yii::$app->request->isPost) {

            if (
                $site->load(Yii::$app->request->post()) &&
                $site->validate() &&

                $user->load(Yii::$app->request->post()) &&
                $user->validate()
            ) {
                $user->photo = UploadedFile::getInstance($user, 'photo');
                $user->uploadImage();
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
        $model = new Sites();

        $result = Sites::find()->indexBy('id')->all();
        var_dump($result);
        $this->render('db-results', $result);
    }




}