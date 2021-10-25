<?php


namespace app\core;


class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    public Session $session;
    public View $view;
    public string $userClass;
    public ?DbModel $user;
    public static Application $app;
    public Database $db;
    public string $layout = 'theme/mainlayout';

    public function __construct($config)
    {
        $this->request    = new Request();
        $this->response   = new Response();
        $this->session    = new Session();
        $this->view       = new View();
        $this->db         = new Database($config['db']);
        $this->router     = new Router($this->request,$this->response);
        self::$app = $this;
        $this->userClass = $config['userClass'];


        $primaryValue = $this->session->get("user");
        if($primaryValue){
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey=>$primaryValue]);
        }else{
            $this->user = null;
        }



    }


    public function runs()
    {
        try
        {
            echo $this->router->resolve();
        }catch (\Exception $e){
            $this->response->setStatusCode($e->getCode());
            echo $this->view->viewTheme("_error",['exception'=>$e]);
        }
    }


    public function login(DbModel $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set("user",$primaryValue);
        return true;
    }

    public function logout()
    {
        $this->user = null;
       $this->session->remove("user");
    }


    public static function isGuest()
    {
        return is_null(self::$app->user);
    }


}