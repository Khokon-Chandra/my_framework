<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\Posts;
use app\models\Teacher;

class SiteController extends Controller
{
    public Posts $post;
    public function __construct()
    {
        $this->post = new Posts();
    }

    public function home()
    {
        return $this->view('home');
    }

    public function post($category)
    {
        $post = $this->post->findOne(['category'=>$category]);
        return $this->view('post',['post'=>$post]);
    }

    public function page($page)
    {
        return $this->view($page);
    }

    public function teachers()
    {
        $teacher = new Teacher();
        return $this->view("faculty",['teachers'=>$teacher->selectAll()]);
    }




}