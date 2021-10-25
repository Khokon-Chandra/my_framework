<?php


namespace app\core;


use app\core\form\Form;
use app\core\menu\AdminMenu;

class View
{
    public Form $form;
    public AdminMenu $menu;

    public function __construct()
    {
        $this->form = new Form();
        $this->menu = new AdminMenu();
    }

    public function link($link)
    {
        $link = ltrim($link,'/');
        return SITE_URL."$link";
    }

    public function viewTheme(string $view, $params = [])
    {
        $controllerLayOut = Application::$app->controller->layout??Application::$app->layout;
       $content = $this->getcontent("theme/".$view,$params);
       $layout  = $this->getcontent($controllerLayOut,$params);
       return str_replace("{{content}}",$content,$layout);
    }






    public function viewAdmin( $view, array $params = [])
    {
        $controllerLayOut = Application::$app->controller->layout??Application::$app->layout;
       $header = $this->getcontent("admin/header",$params);
       $footer = $this->getcontent("admin/footer",$params);
       $navbar = $this->getcontent("admin/nav",$params);
       $topnav = $this->getcontent("admin/top-nav",$params);
       $content = $this->getcontent("admin/$view",$params);
       $layout = $this->getcontent($controllerLayOut,$params);

       $layout = str_replace("{{header}}",$header,$layout);
       $layout = str_replace("{{footer}}",$footer,$layout);
       $layout = str_replace("{{nav}}",$navbar,$layout);
       $layout = str_replace("{{topnav}}",$topnav,$layout);
       return str_replace("{{content}}",$content,$layout);

    }



    private function getcontent($view,$params = [])
    {
        ob_start();
        if(!empty($params)) extract($params);
        include ROOT_DIR."/views/".$view.".php";
        return ob_get_clean();
    }



}