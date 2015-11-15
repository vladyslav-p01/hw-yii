<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.11.15
 * Time: 17:21
 */

namespace frontend\components;


class ObjToArrayComponent {

    private $array = [];

    public function convertToArr($obj)
    {
        foreach ($obj as $key => $field) {
            $this->array[$key] = $field;
        }
        return $this->array;
    }



}