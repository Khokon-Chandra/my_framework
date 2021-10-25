<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\models\Students;

class StudentController extends Controller
{
    protected Students $studentModel;

    public function __construct()
    {
        $this->studentModel = new Students();
    }


    public function students()
    {
        $this->setLayout('admin/layout');
        return $this->viewAdmin('students',['students'=>$this->studentModel->selectAll()]);
    }


    public function addNewStudent()
    {

        if($this->request->isPost()){
            $this->studentModel->loadData($this->request->getBody());
            if($this->studentModel->validate() && $this->studentModel->save()){
                Application::$app->session->setFlashMessage('success',"successfully Registered ");
                Application::$app->response->redirect('/admin/students');
            }
        }
        $this->setLayout('admin/layout');
        return $this->viewAdmin('addnewstudent',["model"=>$this->studentModel]);
    }

}