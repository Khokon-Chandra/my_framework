<?php


namespace app\core\form;


use app\core\Model;

class Select
{
    public Model $model;
    public string $attribute;
    public string $type = 'text';
    public string $placeholder = '';
    public string $classAttrubute = '';
    private string $label='';


    public function __construct($model,$attribute,$option)
    {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->option = $option;
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

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }



    public function setClass($class)
    {
        $this->classAttrubute = $class;
        return $this;
    }


    /**
     *
     */
    public function __toString()
    {
        ob_start();
          ?>
            <div class='form-group <?= $this->classAttrubute ?>'>
                <label for='<?= $this->attribute ?>'><?= $this->label ?></label>
                <select name='<?= $this->attribute ?>' class="form-control <?=
                $this->model->errors[$this->attribute]?'is-invalid':'' ?>" id='<?= $this->attribute ?>'>
                    <?php
                    foreach ($this->option as $item) {
                       if($item == $this->option[0]){
                           printf("<option value='' >%s</option>",$item,$item);
                           continue;
                       }
                        printf("<option value='%s' >%s</option>",$item,$item);
                    }
                    ?>
                </select>
				<div class="invalid-feedback"><?= $this->model->errors[$this->attribute]??'' ?></div>
            </div>
            <?php
        return ob_get_clean();


    }



}



?>