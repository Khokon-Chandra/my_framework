<?php


namespace app\core;


class Session
{
    public const FLASH_KEY = 'flash_messages';

    public function __construct()
    {
         if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
       $flashMessages = $_SESSION[self::FLASH_KEY]??[];
       foreach ($flashMessages as $key => &$flashmessage){
           $flashmessage['remove'] = true;
       }
       $_SESSION[self::FLASH_KEY] = $flashMessages;

    }


    public function setFlashMessage($key , $message)
    {
        $_SESSION[self::FLASH_KEY][$key] = [
            "remove"=>false,
            "message"=>$message
        ];
    }

    public function getFlashMessage($key)
    {
        return $_SESSION[self::FLASH_KEY][$key]["message"]??false;
    }

    public function set($key,$value)
    {
        $_SESSION[$key] = $value;
    }


    public function get($key)
    {
        return $_SESSION[$key]??false;
    }


    public function remove($key)
    {
        unset($_SESSION[$key]);
    }


    public function __destruct()
    {
        $flashMessages = $_SESSION[self::FLASH_KEY]??[];
        foreach($flashMessages as $key=>&$flashMessage){
            if($flashMessage['remove']){
                unset($flashMessages[$key]);
            }
        }
        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }




}