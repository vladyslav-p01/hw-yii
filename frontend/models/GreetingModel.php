<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.11.15
 * Time: 0:25
 */

namespace frontend\models;


use yii\base\Model;

class GreetingModel extends Model
{
    private $parameter = 'private param of GreetingModel';
    public $framework = 'Yii';
    public $year = '2015';
    public $members = '16';

    public function getParameter()
    {
        return $this->parameter;
    }
}