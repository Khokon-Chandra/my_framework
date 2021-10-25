<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\Posts;

class AdminController extends Controller
{
    /**
     * @var AuthMiddleware
     */

    public Posts $post;

    public function __construct()
    {

        if(Application::$app->isGuest()){
            Application::$app->logout();
            Application::$app->response->redirect("/login");
        }
        $this->post = new Posts();
    }

    public function home()
    {
        $this->setLayout("admin/layout");
        return $this->viewAdmin("dashboard");
    }



    public function addPost()
    {
        if($this->request->isPost()){
            $this->post->loadData($this->request->getBody());
            if($this->post->validate() && $this->post->save()){
                Application::$app->session->setFlashMessage('success','Successfully Inserted Post');
            }
        }
        $this->setLayout("admin/layout");
        return $this->viewAdmin("/addpost",['model'=>$this->post]);
    }







}