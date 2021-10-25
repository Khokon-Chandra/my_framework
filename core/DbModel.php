<?php


namespace app\core;


abstract class DbModel extends Model
{

    abstract static function tableName():string;
    abstract function attributes():array;
    abstract static function primaryKey():string;

    protected static function prepare($sql)
    {
        return Application::$app->db->prepare($sql);
    }

    protected function save()
    {

        if(!empty($this->errors)){
            return false;
        }

        $tableName = $this->tableName();
        $attributes = $this->attributes();

        $fields    = implode(',',$attributes);
        $params    = implode(',',array_map(fn($attr)=>":$attr" ,$attributes));
        $sql       = "INSERT INTO $tableName($fields) VALUES($params)";
        $statement = self::prepare($sql);
        foreach ($attributes as $attribute){
            $statement->bindValue(":$attribute",$this->{$attribute});
        }
        $statement->execute();
        return true;
    }

    public static function findOne(array $data)
    {
        $table = static::tableName();
        $attributes = array_keys($data);
        $condition  = implode(' AND ',array_map(fn($attr)=>"$attr = :$attr",$attributes));
        $statement = self::prepare("SELECT * FROM $table WHERE $condition");
        foreach($data as $key => $value){
            $statement->bindValue(":$key",$value);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }


    public static function updateOne(array $data)
    {
        $table = static::tableName();
        $attributes = array_keys($data);
        $condition  = implode(' AND ',array_map(fn($attr)=>"$attr = :$attr",$attributes));
        $statement = self::prepare("UPDATE TABLE $table WHERE $condition");
        foreach($data as $key => $value){
            $statement->bindValue(":$key",$value);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }


    public function selectAll()
    {
        $tablename = static::tableName();
        $statement = self::prepare("SELECT * FROM $tablename");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }


}