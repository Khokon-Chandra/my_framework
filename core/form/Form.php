<?php


namespace app\core\form;
use app\core\Model;

class Form
{
    static function begin($action,$method)
    {
        printf("<form action='%s' method='%s' enctype='multipart/form-data' >",$action,$method);
    }

    static function end(){
        printf("</form>");
    }
    
    static function field(Model $model,$attribute)
    {
        return new Field($model , $attribute);
    }

    static function labelField(Model $model,$attribute)
    {
        return new LabelField($model , $attribute);
    }

    static function radio(Model $model,$attribute=[])
    {
        return new Radio($model , $attribute);
    }

    static function select(Model $model, $attribute, $option)
    {
        return new Select($model,$attribute, $option);

    }
    static function textarea(Model $model, $attribute)
    {
        return new textarea($model,$attribute);

    }






}