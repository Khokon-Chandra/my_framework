<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\models\Teacher;

class TeacherController extends Controller
{
    protected Teacher $teacherModel;

    public function __construct()
    {
        $this->teacherModel = new Teacher();
    }


    public function teachers($teacher_id = null)
    {

        $this->setLayout("admin/layout");
        return $this->viewAdmin("teachers",["model"=>$this->teacherModel->selectAll()]);

    }



    public function addNewTeacher($teacher_id = null)
    {
        if($this->request->isPost()){
            $this->teacherModel->loadData($this->request->getBody());
            if($this->teacherModel->validate() && $this->teacherModel->save()){
                Application::$app->session->setFlashMessage('success','Successfully registered Teacher');
                Application::$app->response->redirect('/admin/teachers');
            }
        }
        $this->setLayout("admin/layout");
        return $this->viewAdmin("addnewteacher",["model"=>$this->teacherModel]);
    }




}