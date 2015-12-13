<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.12.15
 * Time: 19:12
 */

namespace frontend\components;


use yii\bootstrap\Widget;
use yii\helpers\Html;

class TagWidget extends Widget {

    public $string;

    public function init()
    {
        parent::init();
        $this->string = '';
        ob_start();
    }

    public function getTag($tag,$content)
    {

        return $this->string = "<$tag>".$content."</$tag>";
    }

    public function run()
    {
        return Html::encode($this->string);
    }
}