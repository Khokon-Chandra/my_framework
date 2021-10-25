<?php





use app\core\Application;

class teachers
{

    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `teachers` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `firstname` varchar(100) DEFAULT NULL,
              `middlename` varchar(100) DEFAULT NULL,
              `lastname` varchar(100) DEFAULT NULL,
              `phone` varchar(255) DEFAULT NULL,
              `email` varchar(255) DEFAULT NULL,
              `title` varchar(255) DEFAULT NULL,
              `country` varchar(255) DEFAULT NULL,
              `city` varchar(255) DEFAULT NULL,
              `address` varchar(255) DEFAULT NULL,
              `gender` varchar(255) DEFAULT NULL,
              `bloodgroup` varchar(255) DEFAULT NULL,
              `dob` date DEFAULT NULL,
              `doj` date DEFAULT NULL,
              `profile_picture` varchar(255) DEFAULT NULL,
              `cover_photo` varchar(255) DEFAULT NULL,
              `description` text DEFAULT NULL,
              `qualification` varchar(100) DEFAULT NULL,
              `whours` int DEFAULT NULL ,
              `nick_name` varchar(255) DEFAULT NULL,
              `scocial_media_link` text DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $db->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE IF EXISTS teachers";
        $db->exec($sql);
    }


}