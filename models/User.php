<?php


namespace app\models;
use app\core\DbModel;


class User extends DbModel
{
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public static function primaryKey(): string
    {
       return "id";
    }

    public static function tableName(): string
    {
        return "users";
    }


    public function attributes(): array
    {
        return ["firstname", "lastname","email", "password"];
    }


    public function rulse(): array
    {
        return [
            "firstname"=>[self::RULE_REQUIRED],
            "lastname"=>[self::RULE_REQUIRED],
            "email"=>[self::RULE_REQUIRED,self::RULE_EMAIL,[self::RULE_UNIQUE,"class"=>self::class]],
            "password"=>[self::RULE_REQUIRED,[self::RULE_MIN,"min"=>8],[self::RULE_MAX,"max"=>30]],
            "confirmPassword"=>[self::RULE_REQUIRED,[self::RULE_MATCH,"match"=>'password']]
        ];
    }

    public function save()
    {
        $this->password = password_hash($this->password,PASSWORD_DEFAULT);
        return parent::save();

    }



}