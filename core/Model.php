<?php


namespace app\core;


abstract class Model
{
    protected const RULE_REQUIRED = 'required';
    protected const RULE_EMAIL = 'email';
    protected const RULE_MAX = 'max';
    protected const RULE_MIN = 'min';
    protected const RULE_MATCH = 'match';
    protected const RULE_UNIQUE = 'unique';
    protected const RULE_INCORRECT = 'incorrect';
    protected const RULE_EXISTS = 'exists';
    protected const RULE_IMAGE = 'image';
    public array $errors = [];

    abstract function rulse():array;

    public function loadData($data)
    {
        foreach ($data as $key=>$value){
            $this->{$key} = $value;
        }
    }

    public function validate()
    {
        foreach ($this->rulse() as $attribute=>$rules){
            $value = $this->{$attribute};
            foreach ($rules as $rule){
                $rulename = is_string($rule)?$rule:$rule[0];
                if($rulename === self::RULE_REQUIRED && !$value){
                    $this->addError($attribute,self::RULE_REQUIRED);
                }
                if($rulename === self::RULE_EMAIL && $value && !filter_var($value,FILTER_VALIDATE_EMAIL)){
                    $this->addError($attribute,self::RULE_EMAIL);
                }
                if($rulename === self::RULE_MIN && strlen($value) < $rule['min']){
                    $this->addError($attribute,self::RULE_MIN,$rule);
                }
                if($rulename === self::RULE_MAX && strlen($value) > $rule['max']){
                    $this->addError($attribute,self::RULE_MAX,$rule);
                }
                if($rulename === self::RULE_MATCH && $value !== $this->{$rule['match']}){
                    $this->addError($attribute,self::RULE_MATCH,$rule);
                }

                if($rulename === self::RULE_EXISTS && $value){
                    $record = $this->getOne($attribute,$value,$rule);
                    if(!$record){
                        $this->addError($attribute,self::RULE_EXISTS,$rule);
                    }
                }

                if($rulename === self::RULE_UNIQUE){
                    $record = $this->getOne($attribute,$value,$rule);
                    if($record){
                        $this->addError($attribute,self::RULE_UNIQUE,['field'=>$attribute]);
                    }
                }

                if($rulename === self::RULE_IMAGE){
                     if(isset($_FILES[$attribute]) && !empty($_FILES[$attribute])){
                        if($_FILES[$attribute]['error'] == 0){
                            if(!file_exists(ROOT_DIR."/public/upload")) mkdir(ROOT_DIR."/public/upload");
                            $theFile = ROOT_DIR."/public/upload/".$_FILES[$attribute]['name'];
                            $dirname = "upload/".$_FILES[$attribute]['name'];
                            if(move_uploaded_file($_FILES[$attribute]['tmp_name'],$theFile)){
                                $this->{$attribute} = $dirname;
                            }
                        }
                    }
                }
            } //  inner foreach loop end here
        } // outter foreach loop end here


        return empty($this->errors);


    }


    private function getOne($attribute,$value,$rule)
    {
        $className = $rule["class"];
        $tableName =  $className::tableName();
        $sql = "SELECT $attribute FROM $tableName WHERE $attribute = :attr";
        $statement = Application::$app->db->prepare($sql);
        $statement->bindValue(":attr",$value);
        $statement->execute();
        return $record = $statement->fetchObject();
    }

    protected function addError($attribute,$rule,$params = [])
    {
        $messages = $this->errorMessages()[$rule]??"";
        foreach ($params as $key=>$value){
            $messages = str_replace("{{$key}}",$value,$messages);
        }
        $this->errors[$attribute] = $messages;
    }



    private function errorMessages()
    {
        return [
            self::RULE_REQUIRED  =>"This field must not be empty",
            self::RULE_EMAIL     =>"This field must be valid email address",
            self::RULE_MIN       =>"Minimum length of this field {min}",
            self::RULE_MAX       =>"Maximum length of this field {max}",
            self::RULE_MATCH     =>"This field must be the same as {match}",
            self::RULE_UNIQUE    =>"Record with this {field} already exists",
            self::RULE_INCORRECT =>"Incorrect {field}",
            self::RULE_EXISTS    =>"User doesn't exists with this {field}"
        ];
    }

}