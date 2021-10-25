<?php


use app\core\Application;


class temp_post
{

    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `temp_post` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `post_image` varchar(200) DEFAULT NULL,
              `post_title` varchar(200) NOT NULL,
              `post_details` text DEFAULT NULL,
              `post_date` datetime NOT NULL DEFAULT current_timestamp(),
               `category` varchar (200) DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
       $db->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $db->exec("DROP TABLE IF EXISTS temp_post");
    }

}