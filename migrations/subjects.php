<?php





use app\core\Application;

class subjects
{

    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `subjects` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `sub_code` INT DEFAULT NULL ,
              `class_id` INT DEFAULT NULL ,
              `sub_name` VARCHAR(100) DEFAULT NULL,
              `book_name` VARCHAR(100) DEFAULT NULL,
              `sub_desc` VARCHAR(200) DEFAULT NULL,
              `sub_tech_id` INT DEFAULT NULL,
              `max_mark` INT NULL,
              `pass_mark` INT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

        $db->exec($sql);
    }


    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE IF EXISTS subjects";
        $db->exec($sql);
    }


}