<?php


namespace app\core\form;


use app\core\Model;

class textarea
{
    public Model $model;
    public string $attribute;
    public string $type = 'text';
    public string $placeholder = '';
    public string $classAttrubute ='';
    public string $label='';

    public function __construct($model,$attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
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
        return $this;
    }

    public function __toString()
    {
       return sprintf("<div class='form-group %s'>
                      <label for='lb%s' >%s</label>
                      <textarea type='%s' name='%s' rows='10' class='form-control form-control-user %s'	placeholder='%s' value='%s' id='lb%s'></textarea><div class='invalid-feedback'>%s</div></div>",
                       $this->classAttrubute,
                       $this->attribute,
                       $this->label,
                       $this->type,
                       $this->attribute,
                       isset($this->model->errors[$this->attribute])?"is-invalid" : "",
                       $this->placeholder,
                       $this->model->{$this->attribute}??'',
                       $this->attribute,
                       $this->model->errors[$this->attribute]??''

                     );
    }



}