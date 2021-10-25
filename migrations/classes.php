<?php





use app\core\Application;

class classes
{

    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE IF NOT EXISTS `classes` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `class_number` INT,
              `teacher_id` INT,
              `class_name` varchar(100) DEFAULT NULL,
              `class_sdate` date,
              `class_edate` date,
             `class_location` varchar (200),
             `class_capacity` INT
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $db->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE IF EXISTS classes";
        $db->exec($sql);
    }


}