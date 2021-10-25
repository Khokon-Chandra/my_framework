<?php



use app\core\Application;

class contact_info
{
    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `contact_info` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `name` varchar(150) NOT NULL,
              `email` varchar(255) NOT NULL,
              `phone` varchar(15) DEFAULT NULL,
              `messages` text NOT NULL,
              `status` varchar(100) NOT NULL DEFAULT 'unseen',
              `contact_date` datetime NOT NULL DEFAULT current_timestamp()
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $db->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE IF EXISTS contact_info";
        $db->exec($sql);
    }

}