<?php


namespace app\core;


use app\core\middlewares\BaseMiddleware;

class Controller
{
    public string $layout = 'theme/mainlayout';
    public string $action = '';
    protected array $middlewares = [];
    protected ?Request $request;

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function view($view,$params = [])
    {
        return Application::$app->view->viewTheme($view,$params);
    }

    public function viewAdmin($view,$params=[])
    {
        return Application::$app->view->viewAdmin($view,$params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return array
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    /**
     * @param Request|null $request
     */
    public function setRequest(?Request $request): void
    {
        $this->request = $request;
    }

}