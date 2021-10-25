<?php


namespace app\core\exceptions;


class NotFoundException extends \Exception
{
    protected $message = "Not found page";
    protected $code = 404;

}