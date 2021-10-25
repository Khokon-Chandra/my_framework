<?php


use app\core\Application;


class posts
{

    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `posts` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `author` int(11) NOT NULL,
              `post_image` varchar(200) DEFAULT NULL,
              `post_title` varchar(200) NOT NULL,
              `post_details` text NOT NULL,
              `post_container_id` int(11) NOT NULL DEFAULT 1,
              `post_date` datetime NOT NULL DEFAULT current_timestamp(),
              `comments` int(11) DEFAULT 0,
              `post_status` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
       $db->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $db->exec("DROP TABLE IF EXISTS posts");
    }

}