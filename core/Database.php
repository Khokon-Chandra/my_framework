<?php


namespace app\core;



class Database extends \PDO
{

    public function __construct(array $config)
    {
        $dsn      = $config['dsn']??'';
        $username = $config['user']??'';
        $passwd   = $config['password']??'';
        parent::__construct($dsn, $username, $passwd);
        $this->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }


    public function applyMigrationsTable()
    {
        $newMigrations = [];
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrations();
        $files = scandir(ROOT_DIR."/migrations");
        $toApplyMigrations = array_diff($files,$appliedMigrations);
        foreach ($toApplyMigrations as $migration){
            if($migration === "." || $migration ===  "..") continue;
            include_once ROOT_DIR."/migrations/".$migration;
            $className = pathinfo($migration,PATHINFO_FILENAME);
            $instance  = new $className();
            $instance->up();
            $newMigrations[] = $migration;

        }
        if(!empty($newMigrations)){
            $this->saveMigrations($newMigrations);
        }
    }



    private function createMigrationsTable()
    {
        $this->exec("CREATE TABLE IF NOT EXISTS migrations (id INT AUTO_INCREMENT 
            PRIMARY KEY,migration VARCHAR(255),created_at TIMESTAMP DEFAULT
            CURRENT_TIMESTAMP ) ENGINE=INNODB;");
    }



    private function getAppliedMigrations()
    {
        $sql = "SELECT migration FROM migrations";
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }



    private function saveMigrations(array $newMigrations)
    {
        $values = implode(',',array_map(fn($m)=>"('$m')",$newMigrations));
        $sql = "INSERT INTO migrations(migration) VALUES $values";
        $statement = $this->prepare($sql);
        $statement->execute();
    }




}
