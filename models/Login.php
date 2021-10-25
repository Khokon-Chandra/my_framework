<?php


namespace app\models;


use app\core\Application;
use app\core\Model;

class Login extends Model
{
    public string $email = '';
    public string $password = '';

    public function tableName():string
    {
        return "users";
    }

    function rulse(): array
    {
        return [
            "email" => [self::RULE_REQUIRED,self::RULE_EMAIL,[self::RULE_EXISTS,"field"=>"email","class"=>self::class]],
            "password"=>[self::RULE_REQUIRED,[self::RULE_INCORRECT,"field"=>"password","class"=>self::class]]
        ];
    }

    public function login()
    {
        $user = User::findOne(["email"=>$this->email]);
        if(!$user){
            $this->addError("email",self::RULE_EXISTS,["field"=>"email"]);
            return false;
        }
        if(!password_verify($this->password,$user->password)){
            $this->addError("password",self::RULE_INCORRECT,["field"=>"password"]);
            return false;
        }

        return Application::$app->login($user);

    }


}