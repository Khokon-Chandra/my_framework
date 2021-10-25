<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\models\ForgotPassword;
use app\models\User;
use app\models\Login;

class AuthController extends Controller
{



    public function login()
    {
        if(!Application::isGuest()){
            header("location:/admin");
        }
        $this->setLayout("admin/authlayout");
        $loginModel = new Login();
        if($this->request->isPost()){
            $loginModel->loadData($this->request->getBody());
            if($loginModel->validate() && $loginModel->login()){
                Application::$app->response->redirect('/admin');
            }
        }
        return $this->viewAdmin("login",["model"=>$loginModel]);
    }

    public function logout()
    {
        Application::$app->logout();
        Application::$app->response->redirect("/login");
    }



    public function register()
    {
        $this->setLayout("admin/authlayout");
        $userModel = new User();
        if($this->request->isPost()){
            $userModel->loadData($this->request->getBody());
            if($userModel->validate() && $userModel->save()){
                Application::$app->session->setFlashMessage("register","Thanks for your registration");
                Application::$app->response->redirect("/admin");
            }
        }


        return $this->viewAdmin("register",["model"=>$userModel]);
    }



    public function forgotPassword()
    {
        $userModel = new ForgotPassword();
        if($this->request->isPost()){
            $userModel->loadData($this->request->getBody());
            if($userModel->validate() && $userModel->sendMail()){

            }
        }
        $this->setLayout("admin/authlayout");
        return $this->viewAdmin("forgotpassword",["model"=>$userModel]);
    }



}