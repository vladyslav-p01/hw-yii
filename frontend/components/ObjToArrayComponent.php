<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.11.15
 * Time: 17:21
 */

namespace frontend\components;


use yii\base\Component;

class ObjToArrayComponent extends Component {

    private $array = [];

    public function objToArr($obj)
    {
        $this->array = [];
        foreach ($obj as $key => $field) {
            $this->array[$key] = $field;
        }
        return $this->array;
    }

    public function arrayWithObjToArray($ArrObj)
    {
        $this->array = [];
        foreach ($ArrObj as $object) {
            $this->array[$object->id] = $object->title;
        }
        return $this->array;
    }



}