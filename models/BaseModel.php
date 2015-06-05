<?php


abstract class BaseModel
{
    public function all()
    {
        $query = "SELECT * FROM " . $this->table;
        return DB::getAll($query);
    }

    public function get($id)
    {

        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        return DB::getRow($query, [$id]);
    }

    public function delete($id)
    {

        $query = "DELETE FROM ".$this->table." WHERE id = ?";
        return DB::execute($query, [ $id ]);
    }

    public function insert($values)
    {

        $query = "INSERT INTO ".$this->table." VALUES(NULL,";
        for($i=1;$i<= count($values) ; $i++){
            if($i == count($values)){
                $query.="?";
            }else{
                $query.="?,";
            }
        }
        $query .=")";
        return DB::execute($query,$values);
    }
    public function update($params,$id)
    {

        $queryParams = [ ":id" => $id];
        $query = "UPDATE ".$this->table." SET ";

        foreach($params as $column => $value){
            //set params
            $queryParams[":".$column] = $value;
            //make query
            if($value = end($params)){
                $query.= $column."= :".$column;
            }else{
                $query.= $column."= :".$column.",";
            }
        }
        $query.=" WHERE id = :id";

        return DB::execute($query,$queryParams);
    }
} 