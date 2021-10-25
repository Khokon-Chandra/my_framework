<?php





use app\core\Application;

class users
{

    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `users` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `firstname` varchar(100) NOT NULL,
              `lastname` varchar(100) NOT NULL,
              `email` varchar(255) NOT NULL,
              `password` varchar(255) NOT NULL,
              `profile_picture` varchar(255) DEFAULT NULL,
              `cover_photo` varchar(255) DEFAULT NULL,
              `description` text DEFAULT NULL,
              `user_role` varchar(100) DEFAULT NULL,
              `user_registered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `nick_name` varchar(255) DEFAULT NULL,
              `scocial_media_link` text DEFAULT NULL,
              `user_info` text DEFAULT NULL,
              `user_status` int(11) DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $db->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE IF EXISTS users";
        $db->exec($sql);
    }


}