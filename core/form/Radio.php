<?php


namespace app\core\form;


use app\core\Model;

class NoGroup
{
    public Model $model;
    public string $attribute;
    public string $type = 'text';
    public string $placeholder = '';
    public $classAttrubute = '';


    public function __construct($model,$attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }



    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }



    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }



    public function setClass($class)
    {
        $this->classAttrubute = $class;
    }


    public function __toString()
    {
       return sprintf("
      <input type='%s' name='%s' class='form-control form-control-user %s'	placeholder='%s' value='%s'>
      <div class='invalid-feedback'>%s</div>",
       $this->classAttrubute,
       $this->type,
       $this->attribute,
       isset($this->model->errors[$this->attribute])?"is-invalid" : "",
       $this->placeholder,
       $this->model->{$this->attribute}??'',
       $this->model->errors[$this->attribute]??'');
    }



}