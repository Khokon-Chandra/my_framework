<?php


namespace app\models;


use app\core\Model;

class ForgotPassword extends Model
{
    public string $email = '';
    public function tableName():string
    {
        return "users";
    }


    public function rulse(): array
    {
        return [
            "email"=>[self::RULE_REQUIRED,self::RULE_EMAIL,[self::RULE_EXISTS,"field"=>"email","class"=>self::class]]
        ];
    }

    public function sendMail()
    {
        return true;
    }


}