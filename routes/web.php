<?php

use app\controllers\StudentController;
use app\controllers\TeacherController;
use app\routes\Route;
use app\controllers\AdminController;
use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;
use app\models\User;



Route::get("/",[SiteController::class,'home']);
Route::get("/post/{category}/",[SiteController::class,'post']);
Route::get("/page/{page}",[SiteController::class,'page']);
Route::get("/faculty-members",[SiteController::class,'teachers']);

//
//



Route::get("/admin",[AdminController::class,'home']);
Route::get("/admin/add-post",[AdminController::class,'addPost']);
Route::post("/admin/add-post",[AdminController::class,'addPost']);

Route::get('/admin/teachers',[TeacherController::class,'teachers']);
Route::get('/admin/add-new-teacher',[TeacherController::class,'addNewTeacher']);
Route::post('/admin/add-new-teacher',[TeacherController::class,'addNewTeacher']);


/*
 * Students route
 * */

Route::get('/admin/students',[StudentController::class,'students']);
Route::get('/admin/add-new-student',[StudentController::class,'addNewStudent']);
Route::post('/admin/add-new-student',[StudentController::class,'addNewStudent']);





Route::get("/login",[AuthController::class,"login"]);
Route::post("/login",[AuthController::class,"login"]);

Route::get("/register",[AuthController::class,"register"]);
Route::post("/register",[AuthController::class,"register"]);

Route::get("/forgotpassword",[AuthController::class,"forgotPassword"]);
Route::post("/forgotpassword",[AuthController::class,"forgotPassword"]);

Route::get("/logout",[AuthController::class,"logout"]);