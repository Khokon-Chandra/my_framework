<?php



use app\core\Application;

class categories
{

    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `categories` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `category_name` varchar(255) NOT NULL,
              `category_description` text NOT NULL,
              `category_parent_id` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $db->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE IF EXISTS categories";
        $db->exec($sql);
    }

}
