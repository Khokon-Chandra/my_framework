<?php



use app\core\Application;

class comments
{
    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `comments` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `comment_post_id` int(11) NOT NULL,
              `comment_author` varchar(100) NOT NULL,
              `comment_author_email` varchar(100) NOT NULL,
              `parent_id` int(11) NOT NULL,
              `comment_content` text NOT NULL,
              `comment_status` varchar(200) NOT NULL DEFAULT 'unapprove',
              `comment_date` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $db->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE IF EXISTS comments";
        $db->exec($sql);
    }

}