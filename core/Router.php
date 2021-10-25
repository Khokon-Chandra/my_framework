<?php


namespace app\core;


use app\core\exceptions\NotFoundException;

class Router
{
    private array  $routers = [];
    public Request $request;
    public Response $response;

    public function __construct(Request $request,Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    private function patternSetter($path)
    {
        $pathArr = explode('/',$path);
        $pattern = "~{(\w+)}~";
        foreach ($pathArr as $key => $item){
            if(preg_match($pattern,$item)){
                $pathArr[$key] = "(.*)";
            }
        }
        $path = implode('/',$pathArr);
       return "~^".$path."?$~";
    }

    public function get($path,$callback)
    {
        $pattern = $this->patternSetter($path);
        $this->routers['get'][$pattern] = $callback;
        return $this;
    }

    public function post($path,$callback)
    {
        $pattern = $this->patternSetter($path);
        $this->routers['post'][$pattern] = $callback;
        return $this;
    }

    public function resolve()
    {
        $subject = $this->request->getPath();
        $method  = $this->request->getMethod();
        $matches = [];
        foreach ( $this->routers[$method] as $pattern => $callback ){
            if(!preg_match($pattern,$subject,$matches)) continue;
            if(is_string($callback)){
               return Application::$app->view->viewTheme($callback);
            }
            if(is_array($callback)){
                $callback[0] = new $callback[0]();
                Application::$app->controller = $callback[0];
                Application::$app->controller->action = $callback[1];
                Application::$app->controller->setRequest($this->request);
                foreach($callback[0]->getMiddlewares() as $middleware){
                    $middleware->execute();
                }
            }
            $matches = array_slice($matches,1);
            return call_user_func($callback,...$matches);
        }
        throw new NotFoundException();

    }




}